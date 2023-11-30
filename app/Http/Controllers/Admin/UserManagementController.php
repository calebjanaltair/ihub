<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPermission;
use Illuminate\Support\Facades\Validator;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class UserManagementController extends Controller
{
    public function addUserView()
    {
        return view('admin.usermanagement.add');
    }
    public function createNewUser(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users,email',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'This email address is already associated with another user');
        }

        if ($request->has('MainModule')) {
            $MainModule = 1;
        } else {
            $MainModule = 0;
        }

        if ($request->has('TrainingModule')) {
            $TrainingModule = 1;
        } else {
            $TrainingModule = 0;
        }

        if ($request->has('StartupsModule')) {
            $StartupsModule = 1;
        } else {
            $StartupsModule = 0;
        }

        if ($request->has('blogModule')) {
            $blogModule = 1;
        } else {
            $blogModule = 0;
        }

        if ($request->has('fellowshipModule')) {
            $fellowshipModule = 1;
        } else {
            $fellowshipModule = 0;
        }

        if ($request->has('ConsultancyModule')) {
            $ConsultancyModule = 1;
        } else {
            $ConsultancyModule = 0;
        }
        // dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 0;
        $user->status = 1;
        $password = bcrypt('12345678');
        $user->password = $password;
        $user->email_verified_at = now();
        $user->save();

        // set permissions
        $userPermission = new UserPermission();
        $userPermission->user_id = $user->id;
        $userPermission->MainModule = $MainModule;
        $userPermission->TrainingModule = $TrainingModule;
        $userPermission->StartupsModule = $StartupsModule;
        $userPermission->blogModule = $blogModule;
        $userPermission->fellowshipModule = $fellowshipModule;
        $userPermission->ConsultancyModule = $ConsultancyModule;
        $userPermission->save();
        
        try {
            Mail::to($user->email)->send(new WelcomeMail($user->email, '12345678', url('/login')));
        } catch (\Throwable $th) {
            $user->delete();
            return redirect()->back()->with('error', 'Mail could not be sent. Please create user again.');
        }

        return redirect()->route('user-details', ['id' => $user->id])->with('success', 'User created successfully');


    }

    public function editOtherProfile(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'This email address is already associated with another user');
        } 
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->department = $request->department ? $request->department : null;
        $user->status = $request->status ? $request->status : 0;
        $user->save();

        if($request->hasFile('profile_img')){
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/profile/', $filename);
            $user->profile_img = $filename;
            $user->save();
        }

        $userPermission = UserPermission::where('user_id', $user->id)->first();
        $userPermission->MainModule = $request->has('MainModule') ? 1 : 0;
        $userPermission->TrainingModule = $request->has('TrainingModule') ? 1 : 0;
        $userPermission->StartupsModule = $request->has('StartupsModule') ? 1 : 0;
        $userPermission->blogModule = $request->has('blogModule') ? 1 : 0;
        $userPermission->fellowshipModule = $request->has('fellowshipModule') ? 1 : 0;
        $userPermission->ConsultancyModule = $request->has('ConsultancyModule') ? 1 : 0;
        $userPermission->save();

        return redirect()->back()->with('success', 'User profile updated successfully');
    }
}
