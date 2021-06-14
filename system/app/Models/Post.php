<?php

namespace App\Models;

use App\Models\Traits\Attributes\PostAttributes;
use App\Models\Traits\Relations\PostRelations;

class Post extends Model{

	use PostAttributes, PostRelations;

	protected $table = 'post';

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	];

	function handleUploadFoto(){
		if(request()->hasFile('foto')){
			$this->handleDeleteFoto();
			$foto = request()->file('foto');
			$destination = "images/berita";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save;
		}
	}
	function handleDeleteFoto(){
		$foto= $this->foto;
		if($foto){
			$path = public_path($foto);
		if(file_exists($path)){
			unlink($path);

		}
	return true;
		}
	}
	
}