<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'parent_id', 'status', 'slug'];

    public function parent(){
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function child(){
        return $this->hasMany('App\Models\Category', 'parent_id');
    }
}
