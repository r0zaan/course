<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{

    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'class_id',
        'subject_id'
    ];
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function class(){
        return $this->belongsTo(Classroom::class);
    }
    public function videos(){
        return $this->hasMany(Video::class);
    }
}
