<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\GalonCategory;
use App\Models\GalonPurchase;
use Illuminate\Http\Request;

class GalonPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galon_categories = GalonCategory::all();
        return view('pesan_galon', ['galon_categories' => $galon_categories]);
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
            'amount' => ['required'],
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

        $galon_purchase = [
            'customer_id' => $customer_id->id,
            'amount' => $request->amount,
            'type' => $request->type,
        ];

        $galon_type_name = GalonCategory::find($request->type)->select('name')->first();

        $text =
            "Hallo AZISTEN\nSaya " . $request->name . " ingin memesan air galon *" . $galon_type_name->name . "* sebanyak *" . $request->amount . " galon*\nKe alamat saya di *" . $request->address . "*\n\nTerima Kasih.";

        $wa_url = 'https://wa.me/6285869205026?text=' . rawurlencode($text);

        $tes=GalonPurchase::create($galon_purchase);
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
