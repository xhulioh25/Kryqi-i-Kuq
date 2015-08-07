<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pozicioni extends Model {

	//
    protected $table = "pozicioni";
    protected $fillable = [
        'pozicioni'
    ];
    public function person(){
        return $this->belongsTo('App\Info');
    }

}
