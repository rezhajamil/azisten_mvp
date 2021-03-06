<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Afiliator;
use App\Models\AlatKosPurchase;
use App\Models\CateringPurchase;
use App\Models\Customer;
use App\Models\GalonPurchase;
use App\Models\GalonQueue;
use App\Models\KosSearch;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard', [
            'cariKos' => KosSearch::count(),
            'galonPurchase' => GalonPurchase::count(),
            'cateringPurchase' => CateringPurchase::count(),
            'alatKosPurchase' => AlatKosPurchase::count(),
            'cariKosComplete' => KosSearch::where('status_id', 3)->count(),
            'galonPurchaseComplete' => GalonPurchase::where('status_id', '=', 3)->count(),
            'cateringPurchaseComplete' => CateringPurchase::where('status_id', '=', 3)->count(),
            'alatKosPurchaseComplete' => AlatKosPurchase::where('status_id', '=', 3)->count(),
            'galonQueue' => GalonQueue::count(),
            'customers' => Customer::count(),
            'afiliators' => Afiliator::count(),
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
        //
    }
}
