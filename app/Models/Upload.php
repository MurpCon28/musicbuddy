<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function type()
    {
      return $this->belongsTo('App\Models\Type');
    }

    public function tag()
    {
      return $this->belongsTo('App\Models\Tag');
    }

    public function comments() {
      return $this->hasMany('App\Models\Comment');
    }
}
