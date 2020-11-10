<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'prix',
        'horaire',
         
    ];

    public function users() {
    	return $this->hasMany('App\Model\User');
    }

    
    public function realisateur()
    {
        return $this->belongsTo('App\Models\Realisateur');
    }
    public function acteurs() {
        return $this->hasMany('App\Model\Acteur');
    }

    public function salle() {
    	return $this->belongsTo('App\Model\Salle');
    }

    public function genre() {
    	return $this->belongsTo('App\Model\Genre');
    }
}
