<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    use HasFactory;

    protected $fillable = ['vrsta'];

    public function vina()
    {
        return $this->hasMany(Vino::class);
    }
}