<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CouponRedemption;
use Illuminate\Http\Request;

class CouponRedemptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couponRedemptions = CouponRedemption::with(['customer', 'coupon'])->latest()->get();
        return view('admin.couponRedemption.table', [
            'couponRedemptions' => $couponRedemptions,
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
     * @param  \App\Models\CouponRedemption  $couponRedemption
     * @return \Illuminate\Http\Response
     */
    public function show(CouponRedemption $couponRedemption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CouponRedemption  $couponRedemption
     * @return \Illuminate\Http\Response
     */
    public function edit(CouponRedemption $couponRedemption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CouponRedemption  $couponRedemption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CouponRedemption $couponRedemption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CouponRedemption  $couponRedemption
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CouponRedemption::destroy($id);
        return back();
    }
}
