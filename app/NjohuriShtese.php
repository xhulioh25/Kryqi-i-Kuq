<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class NjohuriShtese extends Model {

	//
    protected $table = "njohuri_shtese";
    protected $fillable = [
        "njohuri_shtese"
    ];

    public function personi(){
        return $this->belongsToMany('App/Personat');
    }

}
