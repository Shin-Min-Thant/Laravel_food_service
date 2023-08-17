<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
class PageController extends Controller
{
    public function userHome(){
        return view('welcome');
    }
    public function UserBurgur(){
        return view('pages.burgur');
    }

    public function UserChicken(){
        return view('pages.chicken');
    }

    public function UserAbout(){
        return view('pages.aboutUs');
    }

    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');

    }

    // public function UserAll($id){
    //     $user = User::find($id)->get();
    //     return view('userHome',compact('user'));
    // }

    public function UserProfileEdit(){
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        return view('user.editProfile',compact('user'));
    }


    public function UserProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('uploads/user_img'.$data->photo));
            $filename = uniqid() . $file->getClientOriginalName();
            $file->move(public_path('uploads/user_img/'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();

        return redirect()->back();
    }

    public function UserPasswordChange(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user.changePassword',compact('user'));
    }

    public function UserPasswordUpadate(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        //Match old password
        if(!Hash::check($request->old_password , Auth::user()->password)){
            $notification = array(
                'message' => 'Old Password does not match!',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }

        // Update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);

    }
}
