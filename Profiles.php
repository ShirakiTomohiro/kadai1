<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
     protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required'

    );

    // 以下を追記
    // Profilesモデルに関連付けを行う
    public function historie()
    {
      return $this->hasMany('App\Historie');
    }
}
