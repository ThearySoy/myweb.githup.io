<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Destroy an authenticated session.
    */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //view profile
    public function viewProfile(){
       $id = Auth::user()->id;   //jab yk id del user login jol
        $viewAdminData = User::find($id);  //find data by id
        return view('admin.viewProfile', compact("viewAdminData"));
    }

    //edit profile
    public function editProfile(){
        $id = Auth::user()->id;   
        $viewAdminData = User::find($id); 
        return view('admin.editProfile', compact("viewAdminData"));
    }

    //update profile with Auth
    public function updateProfile(Request $request){
        $id = Auth::user()->id;   //jab yk id del user login jol
        $data = User::find($id);  //find data by id
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;

        //have been image
        if($request->file('profile-image')){
            $file = $request->file('profile-image');

            //get name image
            $fileName = date('YmdHi').$file->getClientOriginalName();
            //move file to folder project
            $file->move(public_path('backend/upload/admin_profile'),$fileName);
            //save file to table
            $data['profile_image'] = $fileName;
        }
        //save to db
        $data->save();

        // message
        $notification = array(
            'message' => 'Data has been save!',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.view.profile')->with($notification);
    }

    //change password
    public function changePasswordProfile(){
        return view('admin.change_password_admin');
    }

    //change password
    public function updatePasswordProfile(Request $request){
        //validation data input
        $validateObjData = $request->validate(
            [
                'oldpassword' => 'required',
                'newpassword' => 'required',
                'confirmpassword' => 'required|same:newpassword'
            ]);
        //check old password
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->newpassword);
            $user->save();
            
            // message
            $notification = array(
                'message' => 'Data has been save!',
                'alert-type' => 'info'
            );
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
