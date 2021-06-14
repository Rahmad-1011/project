<?php

namespace App\Models\Traits\Relations;

use App\Models\User;


trait PostRelations{
	function admin(){
		return $this->belongsTo(User::class, 'id_user');
	}
}
