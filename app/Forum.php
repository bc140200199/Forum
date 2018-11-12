<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Thread;

class Forum extends Model
{
    protected $guarded = [];

    public function threads()
    {
    	return $this->hasMany(Thread::class);
    }
}
