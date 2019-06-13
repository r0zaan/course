<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title',
        'description',
        'video_link',
        'video_name',
        'unit_id',
        'class_id',
        'subject_id',
    ];


    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function class(){
        return $this->belongsTo(Classroom::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
