<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Personat extends Model {

	//

    protected $table = 'personat';

    protected $fillable = [
        'emer',
        'mbiemer',
        'datelindja',
        'vendlindja',
        'profesioni',
        'gjinia',
        'gjendja_civile'
    ];

    public function kontakt(){
        return $this->hasOne('App\Kontakt');
    }

    public function njohuri_shtese(){
        return $this->belongsToMany('App\NjohuriShtese');
    }

    public function gjendja_civile(){
        return $this->hasOne('App\GjendjaCivile');
    }

    public function info(){
        return $this->hasOne('App\Info');
    }

    public function vendlindja(){
        return $this->hasOne('App\Qytet');
    }

    public function femijet(){
        return $this->hasMany('App\Femijet');
    }
}
