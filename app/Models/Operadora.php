<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operadora extends Model
{
    use HasFactory;

    protected $table = 'operadoras';
    protected $fillable = ['nome'];

    public function telefone(){
        return $this->hasOne(Telefone::class);
    }
}
