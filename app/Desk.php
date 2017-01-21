<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    protected $fillable = ['name', 'color', 'material', 'description', 'code'];
}
