<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
class Comment extends Model
{
    protected $fillable =[
    	'user_id','post_id','body',
    ];

    public function post(){

    	return $this->belongsTo(Post::class)->orderBy('created_at','asc');
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

}