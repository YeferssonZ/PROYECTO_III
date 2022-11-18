<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Comentario(){
        return $this->hasMany(Comentario::class);
    }
    public function Reaction(){
        return $this->hasMany(Reaction::class);
    }
}
