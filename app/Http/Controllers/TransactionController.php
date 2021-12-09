<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cari_kos');
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
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionRequest $request)
    {
        $request->validate([
            'name'=>['required'],
            'whatsapp'=>['required'],
            'college'=>['required'],
            'type'=>['required'],
        ]);

        $payment_interval=isset($request->payment_interval)?$request->payment_interval:'Bulan';
        $facility=isset($request->facility)? implode(",", $request->facility):"";

        $data= [
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
            'college' => $request->college,
            'kos_facility' => $facility . "," . $request->other_facil,
            'kos_type' => $request->type,
            'payment_interval' => $payment_interval,
            'price_min' => $request->price_min,
            'price_max' => $request->price_max,
        ];
        $text=
        "Hallo AZISTEN\nSaya ".$request->name." ingin mencari Kos dengan tipe Kos ".$request->type." disekitar kampus *".$request->college."*.\nFasilitas Kos yang ingin saya dapatkan adalah *".$facility.",".$request->other_facil."*\nDengan range harga per ".$payment_interval." *Rp.".number_format($request->price_min,3,"",".")."* - *Rp.". number_format($request->price_max, 3, "", ".")."*\nTerima Kasih.";

        
        // Transaction::create($data);
        return redirect('https://wa.me/6285869205026?text='.rawurlencode($text)) ;
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
