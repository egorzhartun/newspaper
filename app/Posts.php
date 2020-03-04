<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

	protected $table = 'users_posts';
	
    protected $fillable = [
        'title', 'description', 'user_id'
    ];

	public function votes()
	{
		return $this->hasMany(Votes::class, 'post_id');
	}

}
