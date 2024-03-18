<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'preco', 'restaurante_id'];

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    public function itensPedido()
    {
        return $this->hasMany(ItemPedido::class);
    }
}
