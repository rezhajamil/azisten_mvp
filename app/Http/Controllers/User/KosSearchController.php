<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Campus;
use App\Models\College;
use App\Models\Customer;
use App\Models\Kos;
use App\Models\KosImage;
use App\Models\KosFacility;
use App\Models\KosSearch;
use Illuminate\Http\Request;

class KosSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campuses = Campus::all();
        $colleges = College::all();
        return view('user.cari_kos.index', compact('campuses', 'colleges'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cari_kos.form');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'college' => ['required'],
            'type' => ['required'],
        ]);

        $college = $request->college === 'Lainnya' ? $request->other_college : $request->college;
        $payment_interval = isset($request->payment_interval) ? $request->payment_interval : 'Bulan';
        $facility = isset($request->facility) ? implode(",", $request->facility) : "";


        $customer = [
            'name' => $request->name,
            'phone' => $request->phone,
        ];

        Customer::updateOrCreate(
            ['phone' => $request->phone],
            $customer
        );

        $customer_row = Customer::where('phone', '=', $request->phone)->first();
        if ($customer_row) {
            $customer_id = $customer_row;
        } else {
            $customer_id = Customer::whereRaw('id = (select max(`id`) from customers)')->select('id')->first();
        }

        $kos_search = [
            'customer_id' => $customer_id->id,
            'college' => $college,
            'facility' => $facility . "," . $request->other_facil,
            'type' => $request->type,
            'payment_interval' => $payment_interval,
            'price_min' => $request->price_min * 1000,
            'price_max' => $request->price_max * 1000,
        ];

        $text =
            "Hallo AZISTEN\nSaya " . $request->name . " ingin mencari Kos dengan tipe Kos " . $request->type . " disekitar kampus *" . $college . "*.\nFasilitas Kos yang ingin saya dapatkan adalah *" . $facility . "," . $request->other_facil . "*\nDengan range harga per " . $payment_interval . " *Rp." . number_format($request->price_min * 1000, 0, "", ".") . "* - *Rp." . number_format($request->price_max * 1000, 0, "", ".") . "*\nTerima Kasih.";

        $wa_url = 'https://wa.me/6285869205026?text=' . rawurlencode($text);

        KosSearch::create($kos_search);
        return back()->with('success', $wa_url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kos = Kos::with(['host', 'kosAddress', 'kosYearlyRent', 'kosMonthlyRent', 'kosCategory', 'kosImage'])->find($id);
        $facilities = KosFacility::all();
        $kos_facilities = [];
        $kosImage = KosImage::where('kos_id', $id)->get('url');
        $images = [];

        foreach (explode(',', $kos->facility) as $kos_facility) {
            foreach ($facilities as $facility) {
                $facility->id == $kos_facility ? array_push($kos_facilities, $facility->name) : null;
            }
        }

        foreach ($kosImage as $image) {
            array_push($images, $image->url);
        }
        return view('user.cari_kos.detail', compact('kos', 'kos_facilities', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search($slug)
    {
        $campus = Campus::where('slug', '=', $slug)->first();
        $data = Kos::getKosInDistance($campus);
        $images = KosImage::where('is_cover', '=', 1)->get();
        $facilities = KosFacility::all();
        $campuses = Campus::all();
        $colleges = College::all();

        return view('user.cari_kos.search', compact('data', 'campus', 'images', 'facilities', 'campuses', 'colleges'));
    }

    public function book($id)
    {
        $kos = Kos::find($id);
        $text = "Hallo AZISTEN\nSaya ingin booking kos" . $kos->name;

        $wa_url = 'https://wa.me/6285869205026?text=' . rawurlencode($text);

        return redirect($wa_url);
    }

    public function rideSharing($id)
    {
        $kos = Kos::find($id);
        $text = "Hallo AZISTEN\nSaya ingin Ride Sharing untuk kos" . $kos->name;

        $wa_url = 'https://wa.me/6285869205026?text=' . rawurlencode($text);

        return redirect($wa_url);
    }
}
