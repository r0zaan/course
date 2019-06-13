<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
   protected $fillable = [
       'name',
       'address',
       'number',
       'contact_person',
       'description',
       'logo',
       'user_id',
   ];
}
