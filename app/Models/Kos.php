<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;

    protected $fillable = [
        'host_id',
        'name',
        'type',
        'facility',
        'address',
        'yearly_rent',
        'monthly_rent',
        'category',
        'desc',
        'created_at',
        'updated_at',
    ];


    public function host()
    {
        return $this->belongsTo('App\Models\Host', 'host_id', 'id');
    }

    public function kosType()
    {
        return $this->belongsTo('App\Models\KosType', 'type', 'id');
    }

    public function kosAddress()
    {
        return $this->belongsTo('App\Models\KosAddress', 'address', 'id');
    }

    public function kosYearlyRent()
    {
        return $this->belongsTo('App\Models\KosYearlyRent', 'yearly_rent', 'id');
    }

    public function kosMonthlyRent()
    {
        return $this->belongsTo('App\Models\KosMonthlyRent', 'monthly_rent', 'id');
    }

    public function kosCategory()
    {
        return $this->belongsTo('App\Models\KosCategory', 'category', 'id');
    }

    public function kosImage()
    {
        return $this->hasMany('App\Models\KosImage', 'kos_id', 'id');
    }

    public static function getKosInDistance(Campus $campus, $unit = 'kilometers')
    {

        $all_kos = Kos::with(['host', 'kosAddress', 'kosYearlyRent', 'kosMonthlyRent', 'kosCategory', 'kosImage'])->orderBy('name')->get();
        // $campus = Campus::find('slug', $campus->slug);
        $kos = [];

        foreach ($all_kos as $key => $data) {
            $theta = $data->kosAddress->longitude - $campus->longitude;
            $distance = (sin(deg2rad($data->kosAddress->latitude)) * sin(deg2rad($campus->latitude))) + (cos(deg2rad($data->kosAddress->latitude)) * cos(deg2rad($campus->latitude)) * cos(deg2rad($theta)));
            $distance = acos($distance);
            $distance = rad2deg($distance);
            $distance = $distance * 60 * 1.1515;
            switch ($unit) {
                case 'miles':
                    break;
                case 'kilometers':
                    $distance = $distance * 1.609344;
            }
            $jarak = (round($distance, 2));


            if ($jarak <= 3.0) {
                $data->distance = $jarak;
                array_push($kos, $data);
            }
        }

        return $kos;
    }
}
