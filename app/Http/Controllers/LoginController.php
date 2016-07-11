<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class LoginController extends Controller
{
    //
      /**
     * Login
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //
        $data        = array('title'=>'Login');
        return view('login')->with($data);
        
    }

      /**
     * Login
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function loginUser(Request $request)
    {
        
       if($request->has('email') and $request->has('password')){

       		$email       = $request->input('email');
	        $password    = $request->input('password');

       		if (Auth::attempt(['email' => $email, 'password' => $password])) {       
            return redirect()->intended('ticket');
        	}
       }
        
    }

    public function logout(){
    	Auth::logout();
    	return redirect('ticket');
    }
}
