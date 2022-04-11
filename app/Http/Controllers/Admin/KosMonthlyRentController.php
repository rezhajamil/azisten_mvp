<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KosMonthlyRent;
use Illuminate\Http\Request;

class KosMonthlyRentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $kos_monthly_rent = KosMonthlyRent::find($id);

        return view('admin.kos.kosMonthlyRent.edit', compact('kos_monthly_rent'));
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
        $request->validate([
            'kos_monthly_rent' => ['nullable', 'numeric'],
            'kos_monthly_dp' => ['nullable', 'numeric'],
            'kos_monthly_charge' => ['nullable', 'numeric'],
        ]);

        $kos_monthly_rent = KosMonthlyRent::find($id);
        $kos_monthly_rent->fee = $request->kos_monthly_rent;
        $kos_monthly_rent->down_payment = $request->kos_monthly_dp;
        $kos_monthly_rent->two_people_charge = $request->kos_monthly_charge;
        $kos_monthly_rent->save();

        return redirect()->back()->with('success', 'Data updated successfully');
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
