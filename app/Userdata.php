<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    //
    public $timestamps=false;

    protected $fillable = array('Name', 'Age', 'Gender');
}
