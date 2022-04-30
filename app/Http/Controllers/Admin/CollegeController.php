<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::all();
        return view('admin.college.table', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.college.create');
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
            'name' => 'required|unique:colleges',
            'name' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('college-logos');
        }

        $college = College::create([
            'name' => ucwords($request->name),
            'logo' => $logo ?? null,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.college.index')->with('success', 'College created successfully');
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
        $college = College::findOrFail($id);
        return view('admin.college.edit', compact('college'));
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
            'name' => 'required|unique:colleges',
            'name' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $college = College::findOrFail($id);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('college-logos');

            if ($college->logo) {
                Storage::delete($college->logo);
            }
        }

        $college->update([
            'name' => ucwords($request->name),
            'logo' => $logo ?? $college->logo,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.college.index')->with('success', 'College updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $college = College::findOrFail($id);

        if ($college->logo) {
            Storage::delete($college->logo);
        }

        $college->delete();

        return redirect()->route('admin.college.index')->with('success', 'College deleted successfully');
    }
}
