<?php

namespace PlatziLaravel\Models;

use Illuminate\Database\Eloquent\Model;
use PlatziLaravel\User;

class Post extends Model {
    protected $fillable = ['title','slug','body','author_id'];

	public function user(){
		return $this->belongsTo(User::class);
	}
}
