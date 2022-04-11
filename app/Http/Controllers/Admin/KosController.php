<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Host;
use App\Models\Kos;
use App\Models\KosAddress;
use App\Models\KosCategory;
use App\Models\KosFacility;
use App\Models\KosImage;
use App\Models\KosMonthlyRent;
use App\Models\KosType;
use App\Models\KosYearlyRent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kos = Kos::with([
            'host',
            'kosType',
            'kosCategory',
            'kosAddress',
            'kosYearlyRent',
            'kosMonthlyRent',
        ])->get();

        $facilities = KosFacility::all();

        return view('admin.kos.kos.table', compact('kos', 'facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = KosType::all();
        $categories = KosCategory::all();
        $facilities = KosFacility::all();
        $hosts = Host::orderBy('name')->get();
        return view('admin.kos.kos.create', compact('types', 'categories', 'facilities', 'hosts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->host_name || $request->host_phone || $request->host_email || $request->host_address) {
            $request->validate([
                'host_name' => ['required'],
                'host_phone' => ['required', 'numeric', 'digits_between:10,13', 'unique:hosts,phone'],
                'host_email' => ['email', 'unique:hosts,email'],
            ]);

            $host = Host::create([
                'name' => $request->host_name,
                'phone' => $request->host_phone,
                'email' => $request->host_email,
                'address' => $request->host_address,
            ]);
        } else {
            $request->validate([
                'host_id' => ['required'],
            ]);
            $host = Host::find($request->host_id);
        }

        $request->validate([
            'kos_name' => ['required'],
            'kos_type' => ['required'],
            'kos_category' => ['required'],
            'kos_yearly_rent' => ['required', 'numeric'],
            'kos_yearly_dp' => ['nullable', 'numeric'],
            'kos_yearly_charge' => ['nullable', 'numeric'],
            'kos_address' => ['required'],
            'kos_latitude' => ['required', 'numeric'],
            'kos_longitude' => ['required', 'numeric'],
            'kos_city' => ['required'],
            'kos_province' => ['required'],
            'kos_district' => ['required'],
            'kos_sub_district' => ['required'],
            'kos_images' => ['required', 'max:10240'],
        ]);

        $address = KosAddress::create([
            'address' => $request->kos_address,
            'latitude' => $request->kos_latitude,
            'longitude' => $request->kos_longitude,
            'city' => $request->kos_city,
            'province' => $request->kos_province,
            'district' => $request->kos_district,
            'sub_district' => $request->kos_sub_district,
        ]);

        $yearly_rent = KosYearlyRent::create([
            'fee' => $request->kos_yearly_rent,
            'down_payment' => $request->kos_yearly_dp,
            'two_people_charge' => $request->kos_yearly_charge,
        ]);

        if ($request->kos_monthly_rent || $request->kos_monthly_dp || $request->kos_monthly_charge) {
            $request->validate([
                'kos_monthly_rent' => ['required', 'numeric'],
                'kos_monthly_dp' => ['required', 'numeric'],
                'kos_monthly_charge' => ['required', 'numeric'],
            ]);

            $monthly_rent = KosMonthlyRent::create([
                'fee' => $request->kos_monthly_rent,
                'down_payment' => $request->kos_monthly_dp,
                'two_people_charge' => $request->kos_monthly_charge,
            ]);
        } else {
            $monthly_rent = null;
        }

        $kos = Kos::create([
            'host_id' => $host->id,
            'name' => $request->kos_name,
            'type' => $request->kos_type,
            'facility' => implode(',', $request->kos_facility),
            'category' => $request->kos_category,
            'address' => $address->id,
            'yearly_rent' => $yearly_rent->id,
            'monthly_rent' => $monthly_rent ? $monthly_rent->id : null,
            'desc' => $request->kos_desc,
        ]);

        if ($kos) {
            if ($request->file('kos_images')) {

                foreach ($request->file('kos_images') as $key => $image) {
                    $url = $image->store('kos-images');
                    KosImage::create([
                        'kos_id' => $kos->id,
                        'url' => $url,
                        'is_cover' => $key == 0 ? true : false,
                    ]);
                }
            }
        }

        return redirect()->route('admin.kos.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kos = Kos::with([
            'host',
            'kosType',
            'kosCategory',
            'kosAddress',
            'kosYearlyRent',
            'kosMonthlyRent',
            'kosImage',
        ])->find($id);

        $images = KosImage::where('kos_id', $id)->get();

        return view('admin.kos.kos.show', compact('kos', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kos = Kos::find($id);

        $hosts = Host::orderBy('name')->get();
        $types = KosType::all();
        $categories = KosCategory::all();
        $facilities = KosFacility::all();
        return view('admin.kos.kos.edit', compact('kos', 'types', 'categories', 'facilities', 'hosts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->host_name || $request->host_phone || $request->host_email || $request->host_address) {
            $request->validate([
                'host_name' => ['required'],
                'host_phone' => ['required', 'numeric', 'digits_between:10,13', 'unique:hosts,phone'],
                'host_email' => ['email', 'unique:hosts,email'],
            ]);

            $host = Host::create([
                'name' => $request->host_name,
                'phone' => $request->host_phone,
                'email' => $request->host_email,
                'address' => $request->host_address,
            ]);
        } else {
            $request->validate([
                'host_id' => ['required'],
            ]);
            $host = Host::find($request->host_id);
        }

        $request->validate([
            'kos_name' => ['required'],
            'kos_type' => ['required'],
            'kos_category' => ['required'],
        ]);

        $kos = Kos::find($id);

        $kos->update([
            'host_id' => $host->id,
            'name' => $request->kos_name,
            'type' => $request->kos_type,
            'category' => $request->kos_category,
            'facility' => implode(',', $request->kos_facility),
            'desc' => $request->kos_desc,
        ]);

        return redirect()->route('admin.kos.show', $id)->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kos = Kos::find($id);

        $kosAddress = $kos->address;
        $kosAddress = KosAddress::find($kosAddress->id);

        $kosYearlyRent = $kos->yearly_rent;
        $kosYearlyRent = KosYearlyRent::find($kosYearlyRent->id);

        if ($kos->monthly_rent) {
            $kosMonthlyRent = $kos->monthly_rent;
            $kosMonthlyRent = KosMonthlyRent::find($kosMonthlyRent->id);
            $kosMonthlyRent->delete();
        }

        $kos->delete();
        $kosAddress->delete();
        $kosYearlyRent->delete();


        return redirect()->route('admin.kos.index')->with('success', 'Data berhasil dihapus');
    }
}
