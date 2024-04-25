<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function contacto(){
        return $this->belongsTo(Contacto::class,'contacto_id');
    }

    public function producto(){
        return $this->belongsTo(Producto::class,'producto_id');
    }
}
