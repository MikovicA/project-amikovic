<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    protected $fillable = ['naziv', 'opis', 'cijena', 'slika', 'featured', 'kategorija_id' ];

     public function kategorija() {
        return $this->belongsTo(Kategorija::class);
    }
    
    public function narudzbine () {
        return $this->hasMany(Narudzbina::class);
    }
}
