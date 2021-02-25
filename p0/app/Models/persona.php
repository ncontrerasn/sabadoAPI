<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $fillable=['nombre'];

    public function carro(){
        return $this->hasMany('App\Models\Carro');
    }
}
