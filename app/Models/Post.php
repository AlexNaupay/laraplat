<?php

namespace PlatziLaravel\Models;

use Illuminate\Database\Eloquent\Model;
use PlatziLaravel\User;

class Post extends Model {
    protected $fillable = ['title','slug','body','author_id'];

	public function author(){
		return $this->belongsTo(User::class);
	}


	/*public function user(){
		return $this->belongsTo(User::class, 'author_id');
	}*/

	public function scopeSlug($query, $slug){
	    if (!trim($slug).isEmpty()){
	        //$query->where('slug',$slug);
	        $query->where('slug','LIKE',"%$slug%");
        }
    }
}
