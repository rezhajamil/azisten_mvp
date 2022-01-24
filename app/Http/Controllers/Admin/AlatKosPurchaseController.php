<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlatKosProduct;
use App\Models\AlatKosPurchase;
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
        $alat_kos_purchases = AlatKosPurchase::orderBy('created_at', 'desc')->get();
        
        foreach ($alat_kos_purchases as $data) {
            $items=explode(",",$data->item);
            $products=[];
            foreach ($items as $item) {
                $productName=AlatKosProduct::select('name')->where('id',$item)->first();
                array_push($products,$productName->name);
            }
            $data->item=implode(",",$products);
        }

        return view('admin.pesanAlatKos.table', [
            'alat_kos_purchases' => $alat_kos_purchases,
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
        //
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
        AlatKosPurchase::destroy($id);
        return back();
    }

    public function changeStatus(Request $request, AlatKosPurchase $alatKosPurchase)
    {
        $alatKosPurchase->status_id = $request->status;
        $alatKosPurchase->description = $request->description;
        $alatKosPurchase->save();
        return back();
    }
}
