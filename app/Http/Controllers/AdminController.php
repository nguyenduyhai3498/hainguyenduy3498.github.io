<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donhang;
class AdminController extends Controller
{
    function index(){
    	$donhang = new donhang;
    	$newlist = $donhang->get_newlist();
    	return view('admin.pages.newlist',compact('newlist'));
    }
}
