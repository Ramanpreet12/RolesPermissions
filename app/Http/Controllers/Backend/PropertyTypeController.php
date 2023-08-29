<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyType;


class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_types = PropertyType::latest()->get();
        return view('backend.property_type.all_types' , compact('all_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.property_type.add_types');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_name' => 'required|unique:property_types',
            'type_icon' => 'required'
        ]);
        PropertyType::insert([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon
        ]);

        $notification = array(
            'message' => 'Property type added successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.all-types.index')->with($notification);
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
        $property_type = PropertyType::findOrFail($id);
        return view('backend.property_type.edit_types' , compact('property_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'type_name' => 'required',
            'type_icon' => 'required'
        ]);

        PropertyType::findOrFail($id)->update([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon
        ]);

        $notification = array(
            'message' => 'Property type updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.all-types.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function typeDelete($id)
    {
        // dd($id);
        PropertyType::find($id)->delete();
        $notification = array(
            'message' => 'Property type deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.all-types.index')->with($notification);

    }
}
