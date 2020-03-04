<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    public $timestamps = false;

    protected $table = 'vote_posts';
	
    protected $fillable = [
        'post_id', 'user_id', 'vote'
    ];

    public function post() {
    	return $this->belongsTo(Posts::class);
    }
}
