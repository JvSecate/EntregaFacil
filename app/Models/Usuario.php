<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'senha', 'tipo'];

    public function pedidosCliente()
    {
        return $this->hasMany(Pedido::class, 'cliente_id');
    }

    public function pedidosEntregador()
    {
        return $this->hasMany(Pedido::class, 'entregador_id');
    }
}
