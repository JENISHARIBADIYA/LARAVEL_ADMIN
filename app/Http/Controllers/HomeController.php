<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function changePass()
    {
       // echo "dd";exit;
        return view('changepassword');
    }

    public function updatePass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'oldPass' => 'required|max:20',
            'newPass' => 'required|max:20',
            'cPass' => 'required|same:newPass|max:20',
        ]);
        if ($validator->fails()) {
            return redirect('changepassword')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user = User::findOrFail(auth()->user()->id);
        if (Hash::check($request->newPass, $user->password)) {
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($request->input('newPass'));
            $user->save();
            return redirect('/changepassword')->with('status', 'Password updated Successfully.');
        }
        else{
                $request->session()->flash('error', 'Old Password does not match');
                return redirect('/changepassword');
        }
    }

    public function updateProfile()
    {
        $data['user'] = auth()->user();
        return view('updateprofile',compact('data'));
    }

    public function saveProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20',
            'email' => 'required|max:20'
        ]);
        if ($validator->fails()) {
            return redirect('updateprofile')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user = User::find(auth()->user()->id);
        $user->name =$request->input('name');
        $user->email =$request->input('email');
        $user->save();
        return redirect('/updateprofile')->with('status', 'Profile updated Successfully.');
    }

}
