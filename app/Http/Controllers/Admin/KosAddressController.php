<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KosAddress;
use Illuminate\Http\Request;

class KosAddressController extends Controller
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
        $kos_address = KosAddress::find($id);

        return view('admin.kos.kosAddress.edit', compact('kos_address'));
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
            'kos_address' => ['required'],
            'kos_latitude' => ['required', 'numeric'],
            'kos_longitude' => ['required', 'numeric'],
            'kos_city' => ['required'],
            'kos_province' => ['required'],
            'kos_district' => ['required'],
            'kos_sub_district' => ['required'],
        ]);

        $kos_address = KosAddress::find($id);

        $kos_address->update([
            'address' => $request->kos_address,
            'latitude' => $request->kos_latitude,
            'longitude' => $request->kos_longitude,
            'city' => $request->kos_city,
            'province' => $request->kos_province,
            'district' => $request->kos_district,
            'sub_district' => $request->kos_sub_district,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diubah');
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
