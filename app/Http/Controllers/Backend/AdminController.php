<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth , Hash;
use Illuminate\View\View;
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


    public function adminLogin() {
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

    public function adminChangePassword() : View{
        $id = Auth::user()->id;
        $profile_data = User::find($id);
        return view('backend.admin.admin_password' , compact('profile_data'));
    }

    public function adminUpdatePassword(Request $request){
       $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|confirmed'
       ]);
       //check the old password
       if (!Hash::check($request->old_password, Auth::user()->password) ) {
        $notification = array(
            'message' => 'Old Password in Invalid',
            'alert-type' => 'error'
        );
        return back()->with($notification);

        }

        //update new password
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        $notification = array(
            'message' => 'Password Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);


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
