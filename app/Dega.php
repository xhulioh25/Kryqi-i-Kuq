<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Dega extends Model {

	//
    protected $table = "dega";

    public function nenDega(){
        return $this->hasMany('App\Dega');
    }

    public function dega(){
        return $this->belongsTo('App\Dega');
    }

    public function aktivist(){
        return $this->hasMany('App\Info');
    }

    public function qytet(){
        return $this->belongsTo('App\Qytet');
    }

}
