<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostGood extends Model {
    use HasFactory;
    use SoftDeletes;

    public function users() {
        return $this->hasMany( 'App\User' );
    }

    public function posts() {
        return $this->hasMany( 'App\Post' );
    }
}