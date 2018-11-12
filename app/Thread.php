<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Forum;
use \App\User;
use \App\Comment;
use Carbon\Carbon;

class Thread extends Model
{
   protected $guarded = [];

   public function forum()
   {
		return $this->belongsTo(Forum::class);
	}

   public function user()
   {
   	return $this->belongsTo(User::class);
   }

	public function comments()
   {
      return $this->hasMany(Comment::class);
   }

   // public function scopeFilter($query, $filters)
   // {
   //       if(isset($filters['month'])) 
   //       {
   //          if ($month = $filters['month']) {
   //                $query->whereMonth('created_at', Carbon::parse($month)->month);
   //             }

   //       }

   //       if(isset($filters['year'])) {
   //          if ($year = $filters['year']) {
   //                $query->whereYear('created_at', $year);
   //             }
   //       }

   //     } 
}
