<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetGrupi extends Model {

	//
    protected $table = "target_grupi";
    public function programi(){
        return $this->belongsTo('App\Programi');
    }

}
