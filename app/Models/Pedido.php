<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'entregador_id', 'restaurante_id', 'status'];

    public function cliente()
    {
        return $this->belongsTo(Usuario::class, 'cliente_id');
    }

    public function entregador()
    {
        return $this->belongsTo(Usuario::class, 'entregador_id');
    }

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    public function itensPedido()
    {
        return $this->hasMany(ItemPedido::class);
    }
}
