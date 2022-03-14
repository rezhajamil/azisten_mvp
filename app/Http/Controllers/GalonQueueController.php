<?php

namespace App\Http\Controllers;

use App\Models\GalonQueue;
use Illuminate\Http\Request;

class GalonQueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galon_queue = GalonQueue::with('galonPurchase')->orderBy('created_at', 'asc')->get();
        return view('admin.antrianGalon.table', [
            'galon_queue' => $galon_queue,
        ]);
    }

    public function destroy($id)
    {
        GalonQueue::destroy($id);
        return back();
    }

    public function getQueue(Request $request)
    {
        $phone = $request->phone;
        $queue = GalonQueue::all();
        $queue_num = null;
        foreach ($queue as $key => $data) {
            if ($data->phone == $phone) {
                $queue_num = $key + 1;
                break;
            }
        }
        return response()->json(array('queue' => $queue_num, 'phone' => $phone, 'status' => 200), 200);
    }
}
