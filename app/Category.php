<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Category extends Model
{
    use Softdeletes;

    protected $fillable = [
        'name', 'photo', 'slug'
    ];

    protected $hidden = [];
}
