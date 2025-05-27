<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Narudzbina extends Model
{
    public function vino() {
        return $this->belongsTo(Vino::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
    'user_id',
    'vino_id',
    'kolicina',
    ];
}
