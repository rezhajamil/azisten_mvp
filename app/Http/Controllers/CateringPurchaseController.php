<?php

namespace App\Http\Controllers;

use App\Models\CateringCategory;
use App\Models\CateringDuration;
use App\Models\CateringPurchase;
use App\Models\Customer;
use Illuminate\Http\Request;

class CateringPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catering_categories=CateringCategory::all();
        $catering_durations=CateringDuration::all();
        return view('pesan_catering',[
            'catering_categories'=> $catering_categories, 
            'catering_durations'=> $catering_durations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'address' => ['required'],
            'type' => ['required'],
            'duration' => ['required'],
        ]);

        $customer = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
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

        $catering_purchase = [
            'customer_id' => $customer_id->id,
            'duration' => $request->duration,
            'type' => $request->type,
        ];

        $catering_type_name = CateringCategory::find($request->type)->select('name')->first();
        $catering_duration_name = CateringDuration::find($request->duration)->select('name')->first();

        $text =
        "Hallo AZISTEN\nSaya " . $request->name . " ingin berlangganan catering *" . $catering_type_name->name . "* selama *" . $catering_duration_name->name . "*\nAlamat saya berada di *" . $request->address . "*\n\nTerima Kasih.";

        $wa_url = 'https://wa.me/6285869205026?text=' . rawurlencode($text);

        CateringPurchase::create($catering_purchase);
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
        //
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
}
