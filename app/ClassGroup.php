<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassGroup extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'status'
    ];
    public function classes(){
        return $this->belongsToMany('\App\Classroom', 'class_group_classroom_pivot', 'class_group_id', 'classroom_id')->withTimestamps();
    }
}
