<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'image',
    ];

    public function films()
    {
        return $this->hasMany('App\Models\Film');
    }
}
