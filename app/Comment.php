<?php

namespace App;
use \App\Thread;
use \App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     public function thread()
   {
   	return $this->belongsTo(Thread::class);
   }
}
