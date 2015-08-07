<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model {

    protected $table = 'info';

    protected $fillable = [
        'personi',
        'qendra',
        'pozicioni',
        'programi',
        'disponimi',
        'gatishmeria',
        'koha',
        'rregjistrimi',
        'viti_i_fundit'
    ];

	//
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pozicioni(){
        return $this->hasOne('App\Pozicioni');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function person(){
        return $this->belongsToMany('App\Personat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kontakt(){
        return $this->hasOne('App\Kontakt');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dega(){
        return $this->belongsTo('App\Dega');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programi(){
        return $this->hasMany('App\Programi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gatishmeria(){
        return $this->hasOne('App\Gatishmeria');
    }

}
