<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontakt extends Model {

	//
    protected $table = 'kontakt';

    protected $fillable = [
        'personi',
        'email',
        'telefon',
        'celular'
    ];

    public function person(){
        return $this->belongsTo('App\Personat');
    }

}
