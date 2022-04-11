<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kos;
use App\Models\KosImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KosImageController extends Controller
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
        $request->validate([
            'kos_images' => 'required|max:10240',
            'kos_id' => 'required',
        ]);

        if ($request->file('kos_images')) {
            foreach ($request->file('kos_images') as $key => $image) {
                $url = $image->store('kos-images');
                KosImage::create([
                    'kos_id' => $request->kos_id,
                    'url' => $url,
                    'is_cover' => false,
                ]);
            }
            return back()->with('success', 'Images uploaded successfully');
        } else {
            return 'false';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KosImage  $kosImage
     * @return \Illuminate\Http\Response
     */
    public function show(KosImage $kosImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KosImage  $kosImage
     * @return \Illuminate\Http\Response
     */
    public function edit(KosImage $kosImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KosImage  $kosImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KosImage $kosImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KosImage  $kosImage
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Request $request, KosImage $kosImage)
    // {
    //     // return 'aa';
    //     $request->validate([
    //         'image_id' => 'required'
    //     ]);


    //     foreach ($request->image_id as $key => $image) {
    //         $url = KosImage::find($image)->url;
    //         KosImage::destroy($image);
    //         Storage::delete($url);
    //     }

    //     return back()->with('success', 'Image(s) deleted successfully');
    // }

    public function deleteImage(Request $request)
    {
        $request->validate([
            'image_id' => 'required'
        ]);


        foreach ($request->image_id as $key => $image) {
            $url = KosImage::find($image)->url;
            KosImage::destroy($image);
            Storage::delete($url);
        }

        return back()->with('success', 'Image(s) deleted successfully');
    }

    public function changeCover(Request $request, $kos_id)
    {
        $request->validate([
            'image_id' => 'required'
        ]);
        $old_cover = KosImage::where('kos_id', $kos_id)->where('is_cover', 1)->update(['is_cover' => 0]);
        $new_cover = KosImage::find($request->image_id)->update(['is_cover' => 1]);

        return back()->with('success', 'Cover berhasil diubah');
    }
}
