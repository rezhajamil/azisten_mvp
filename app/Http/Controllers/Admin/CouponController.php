<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::latest()->get();
        return view('admin.coupon.table', [
            'coupons' => $coupons,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupon.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'disc_amount' => ['required'],
            'exp_date' => ['required'],
            'coupon_amount' => ['required'],
        ]);


        for ($i = 0; $i < $request->coupon_amount; $i++) {
            $cond = true;
            while ($cond) {
                $coupon_code = $this->getCouponCode(3, 3);
                $check = Coupon::where('coupon_code', $coupon_code)->first();
                if (!$check) {
                    $cond = false;
                }
            }
            Coupon::create([
                'coupon_code' => $coupon_code,
                'discount_amount' => $request->disc_amount,
                'discount_type' => $request->disc_type,
                'expiration_date' => $request->exp_date,
            ]);
        }

        return redirect()->route('admin.coupon.index')->with('success', 'Coupon berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy($coupon_code)
    {
        Coupon::destroy($coupon_code);
        return back();
    }

    public function getCouponCode($n_alp, $n_num)
    {
        $alp = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '0123456789';
        $randomCode = '';

        for ($i = 0; $i < $n_alp; $i++) {
            $index = rand(0, strlen($alp) - 1);
            $randomCode .= $alp[$index];
        }
        for ($i = 0; $i < $n_num; $i++) {
            $index = rand(0, strlen($num) - 1);
            $randomCode .= $num[$index];
        }
        $randomCode = str_split($randomCode, 1);
        shuffle($randomCode);

        return implode("", $randomCode);
    }
}
