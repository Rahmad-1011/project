<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class authcontroller extends Controller
{
	function Login(){
		return view('Auth/login');

	}
	
	function create(){
		return view('Auth/register');
	}

	function LoginProcess(){
			if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('Admin/beranda')-> with('success', 'Login Berhasil');
			}else{
				return back()-> with('danger', 'Silahkan cek email dan password anda');
			}
	}
	

	function Register(){
		$user = new user;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user-> save();

		return redirect ('Auth/login')-> with ('success', 'Registrasi Berhasil');
	}


	function Logout(){
		Auth::logout();
		return view('login');

	}

}