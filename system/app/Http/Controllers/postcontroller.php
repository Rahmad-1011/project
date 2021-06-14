<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;

class postcontroller extends Controller {
	function index(){
		$data['list_post'] = Post::all();
		return view('Admin.Post.beranda', $data);
	}

	function create(){
		return view('Admin.Post.create');

	}

	function store(){
		$post = new post;
		$post-> id_user = request()->user()->id;
		$post-> nama = request('nama');
		$post-> deskripsi = request('deskripsi');
		$post->handleUploadFoto();

		$post-> save();


		return redirect ('Admin/beranda')-> with ('success', 'Data berhasil ditambahkan');

	}

	function edit(Post $post){
		$data['post'] = $post;
		return view('Admin.Post.edit', $data);
	}

	function update(Post $post){
		$post-> nama = request('nama');
		$post-> deskripsi = request('deskripsi');
		$post->handleUploadFoto();
		$post-> save();


		return redirect ('Admin/beranda')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(Post $post){
		$post->handleDeleteFoto();
		$post->delete();

		return redirect ('Admin/beranda')-> with ('danger', 'Data berhasil dihapus');

	}

}