<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name'
    ];
    public function units(){
        return $this->hasMany(Unit::class,'class_id');
    }
}
