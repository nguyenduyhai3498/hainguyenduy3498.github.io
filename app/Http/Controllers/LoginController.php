<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
Use Alert;
use Carbon\Carbon;
use App\User;
use DB;
class LoginController extends Controller
{
    public function show(){
    	return view('admin.login.login');
    }
    public function checklogin(Request $rq){
    	$email = $rq->user_email;
    	$password = $rq->password;
    	if (Auth::attempt(['email'=>$email,'password'=>$password,'level'=>1])) {
    		return redirect()->route('ad_index');
    	}
    	else{
    		Alert::error('Lỗi','Sai Email hoặc mật khẩu');
    		return redirect()->back()->withInput();
    	}
    }
    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }
}
