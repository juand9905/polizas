<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $appends = ['email_hashed'];

    protected function emailHashed(): Attribute
    {
        return Attribute::make(
            get: fn () => md5(strtolower(trim($this->email))),
        );
    }

    public function registros(){
        return $this->hasMany(Registro::class);
    }

    public function vehiculos(){
        return $this->hasMany(Vehiculo::class);
    }

    public function polisas(){
        return $this->hasMany(Poliza::class);
    }
}
