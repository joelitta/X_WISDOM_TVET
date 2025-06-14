<?php

namespace App\Http\Controllers;

use App\Models\AccountModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:10',
        ]);

        $user = new AccountModel();
        $user->Names = $request->names;
        $user->Email = $request->email;
        $user->Password =$request->password; 

        $result = $user->save();

        if ($result) {
            return redirect('Login');
        } else {
            return redirect('User');
        }
    }
    public function login(Request $request){
        $request->validate([
            'names'=>'required',
            'password'=>'required|min:5|max:10',
        ]);
        $log=AccountModel::where('Names','=',$request->names)->first();
if($log){
    if($request->password == $log->Password){
        session()->put('wisedom',$log->Names);
        return redirect('Dashboard');
    }else{
        return redirect('Login')->with('fail','Username or password incorect');

    }
}else{
    return redirect('Login')->with('fail','Invalid ');
}
    
    }
    
    public function logout()
    {
        if(session()->has('wisedom')){
            session()->forget('wisedom');
            session()->flush();
            session()->regenerate();
            
            return redirect('Login')
                ->with('success', 'Wasohotse neza! / Logged out successfully!')
                ->header('Cache-Control', 'nocache, no-store, max-age=0, must-revalidate')
                ->header('Pragma', 'no-cache')
                ->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
        }
        return redirect('Login');
    }
}
