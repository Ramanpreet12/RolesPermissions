<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminDashboard()
    {
        return view('backend.admin.admin_index');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }


    public function adminLogin(){
        return view('backend.admin.admin_login');
    }

    public function adminProfile(){
        $id = Auth::user()->id;
        $profile_data = User::find($id);
        return view('backend.admin.admin_profile' , compact('profile_data'));
    }

    public function adminProfileStore(Request $request){
        $id =Auth::user()->id;
        $user_data = User::find($id);
        $user_data->name = $request->name;
        $user_data->username = $request->username;
        $user_data->email = $request->email;
        $user_data->phone = $request->phone;
        $user_data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('uploads/admin_images/'. $user_data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/admin_images') , $filename);
            $user_data['photo'] = $filename;

        }

        $user_data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
