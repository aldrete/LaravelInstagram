<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
   protected $guarded = [];

   public function profileimage()
   {
        $imagepath = ($this->image) ? $this->image : 'profile/14evhWuZKSX9VQj5yAVCAAidRiMLmMkHhwfexbzf.png';

       return '/storage/' .  $imagepath;
    }

    public function followers()
    {
            return $this->belongsToMany(User::class);

    }
   public function user()
   {

    return $this->belongsTo(User::class);
   }
}
