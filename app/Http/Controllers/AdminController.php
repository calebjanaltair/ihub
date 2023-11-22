<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function users()
    {
        // fetch all uusers record except for the current user
        $users = User::where('id', '!=', Auth::id())->get();
        return view('admin.users', compact('users'));
    }

    public function blockUser(Request $request)
    {
        $user = User::find($request->id);
        $user->status = 2;
        $user->save();
        $users = User::where('id', '!=', Auth::id())->get();
        $view = view('admin.userRecords', compact('users'))->render();
        return response()->json(['success' => 'User blocked successfully', 'html' => $view]);
    }

    public function unblockUser(Request $request)
    {
        $user = User::find($request->id);
        $user->status = 1;
        $user->save();
        $users = User::where('id', '!=', Auth::id())->get();
        $view = view('admin.userRecords', compact('users'))->render();
        return response()->json(['success' => 'User blocked successfully', 'html' => $view]);
    }

    public function deleteUser(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        $users = User::where('id', '!=', Auth::id())->get();
        $view = view('admin.userRecords', compact('users'))->render();
        return response()->json(['success' => 'User blocked successfully', 'html' => $view]);
    }

    public function userDetails($id){
        $user = User::find($id);
        return view('admin.userDetails', compact('user'));
    }
    public function editOtherProfile(Request $request){
        // return response()->json(['data' => $request->all()]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->department = $request->department;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();

        if($request->hasFile('profile_img')){
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/profile/', $filename);
            $user->profile_img = $filename;
            $user->save();
        }
        return redirect()->back()->with('success', 'User profile updated successfully');
        // return response()->json(['success' => 'User profile updated successfully', 'user' => $user], 200);

    }

    public function editProfile(Request $request){
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->department = $request->department;
        $user->save();

        if($request->hasFile('profile_img')){
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            
            $file->move('public/uploads/profile/', $filename);
            // dd($filename);
            $user->profile_img = $filename;
            $user->save();
        }
        return redirect()->back()->with('success', 'Your profile is updated successfully');
    }

    public function editPassword(Request $request){
        $user = User::find(Auth::id());
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->back()->with('success', 'Your password is updated successfully');
    }
}
