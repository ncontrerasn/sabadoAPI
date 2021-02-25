<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    public function persona(){
        return $this->belongsTo('App\Models\persona');
    }
}
