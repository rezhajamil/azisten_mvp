<?php

namespace App\Http\Controllers;

use App\Models\AlatKosProduct;
use App\Models\AlatKosPurchase;
use App\Models\Customer;
use Illuminate\Http\Request;

class AlatKosPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=AlatKosProduct::all();
        return view('pesan_alat_kos',['products'=>$products]);
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
            'item' => ['required'],
        ]);

        $item = isset($request->item) ? implode(",", $request->item) : "";

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

        $alat_kos_purchase=[
            'customer_id'=>$customer_id->id,
            'item'=>$item,
        ];

        $item_list=[];
        foreach ($request->item as $item) {
            $data=AlatKosProduct::find($item);
            array_push($item_list,$data->name);
        }

        $text =
        "Hallo AZISTEN\nSaya " . $request->name . " ingin memesan peralatan kos yaitu *" . implode(",", $item_list) . "*\nKe alamat saya di *" . $request->address . "*\n\nTerima Kasih.";

        $wa_url = 'https://wa.me/6285869205026?text=' . rawurlencode($text);

        AlatKosPurchase::create($alat_kos_purchase);
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
