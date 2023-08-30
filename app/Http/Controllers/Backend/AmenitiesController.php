<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amenity;

class AmenitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_amenities = Amenity::latest()->get();
        return view('backend.amenities.all_amenities' , compact('all_amenities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.amenities.add_amenity');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amenity_name' => 'required|unique:amenities',
        ]);
        Amenity::insert([
            'amenity_name' => $request->amenity_name,
        ]);
        $notification = array(
            'message' => 'Amenity added successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.amenities.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $amenity = Amenity::findOrFail($id);
        return view('backend.amenities.edit_amenity' , compact('amenity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'amenity_name' => 'required',
        ]);
        Amenity::findOrfail($id)->update([
            'amenity_name' => $request->amenity_name,
        ]);
        $notification = array(
            'message' => 'Amenity updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.amenities.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function amenityDelete($id)
    {
        Amenity::find($id)->delete();
        $notification = array(
            'message' => 'Amenity deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.all-types.index')->with($notification);
    }
}
