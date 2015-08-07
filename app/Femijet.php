<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Femijet extends Model {

	//
    protected $table = "femijet";
    public function prinderit(){
        return $this->hasMany('App\Personat');
    }

}
