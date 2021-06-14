<?php 

namespace App\Http\Controllers;
use App\Models\User;

class admincontroller extends Controller
{
	
	function showBeranda(){
		return view('Admin.beranda');
	}

}
