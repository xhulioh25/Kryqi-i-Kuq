<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GjendjaCivile extends Model {

	//
    protected $table = "gjendja_civile";
    protected $fillable = [
        'statusi'
    ];
    public function person(){
        return $this->belongsToMany('App\Personat');
    }

}
