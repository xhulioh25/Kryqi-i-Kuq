<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Qytet extends Model {

	//
    protected $table = "qytet";

    protected $fillable = [
        "qyteti"
    ];

    public function dega(){
        return $this->hasMany('App\Dega');
    }

    public function person(){
        return $this->hasMany('App\Personat');
    }

}
