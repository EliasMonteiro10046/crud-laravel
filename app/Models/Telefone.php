<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;

    protected $table = 'telefones';
    protected $fillable = ['ddd','numero','cliente_id', 'operadora_id'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function operadora(){
        return $this->belongsTo(Operadora::class);
    }
}
