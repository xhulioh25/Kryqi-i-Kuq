<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Programi extends Model {

	//
    protected $table = "programi";
    public function info(){
        return $this->belongsToMany('App\Info');
    }

}
