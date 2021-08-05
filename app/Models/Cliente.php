<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $fillable = ['nome','cpf','nascimento'];

    public function telefones(){
        return $this->hasMany(Telefone::class);
    }
}
