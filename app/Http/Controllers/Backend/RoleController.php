<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('backend.permissions.all_permissions' , compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.permissions.add_permission');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions',
        ]);
        Permission::insert([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);
        $notification = array(
            'message' => 'Permission added successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.permissions.index')->with($notification);
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
        $permission = Permission::findOrFail($id);
        return view('backend.permissions.edit_permission' , compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Permission::findOrfail($id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);
        $notification = array(
            'message' => 'Permission updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.permissions.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function PermissionDelete(string $id)
    {
        Permission::find($id)->delete();
        $notification = array(
            'message' => 'Permission deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.permissions.index')->with($notification);
    }
}
