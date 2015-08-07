<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Gatishmeria extends Model {

	//
    protected $table = "gatishmeria";
    protected $fillable = [
        'gatishmeria'
    ];
    public function info(){
        return $this->belongsToMany('App\Info');
    }

}
