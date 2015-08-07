<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Programi extends Model {

	//
    protected $table = "programi";

    protected  $fillable = [
        'programi',
        'pershkrimi'
    ];
    public function info(){
        return $this->belongsToMany('App\Info');
    }

}
