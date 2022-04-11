<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KosYearlyRent;
use Illuminate\Http\Request;

class KosYearlyRentController extends Controller
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
        $kos_yearly_rent = KosYearlyRent::find($id);

        return view('admin.kos.kosYearlyRent.edit', compact('kos_yearly_rent'));
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
            'kos_yearly_rent' => ['required', 'numeric'],
            'kos_yearly_dp' => ['nullable', 'numeric'],
            'kos_yearly_charge' => ['nullable', 'numeric'],
        ]);

        $kos_yearly_rent = KosYearlyRent::find($id);


        $kos_yearly_rent->update([
            'fee' => $request->kos_yearly_rent,
            'down_payment' => $request->kos_yearly_dp,
            'two_people_charge' => $request->kos_yearly_charge,
        ]);

        return redirect()->back()->with('success', 'Kos yearly rent updated successfully');
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
