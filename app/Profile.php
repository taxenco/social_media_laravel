<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

 protected $guarded = []; //disabling mass assignment

 public function profileImage()
 {
  return ($this->image) ? '/storage/' . $this->image : "/storage/profile/rxXAJ9Xtdemk8X7tPlYB00OrebH8lNeHSvQxXptR.png";
 }

 public function user()
 {
  return $this->belongsTo(User::class);
 }
}
