<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historie extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'profiles_id' => 'required',
        'edited_at' => 'required',
    );
}
