<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Registro extends Model
{
    use HasFactory;

    protected $appends = ['email_hashed'];

    protected function emailHashed(): Attribute
    {
        return Attribute::make(
            get: fn () => md5(strtolower(trim($this->registro_email))),
        );
    }

    public function vehiculos(){
        return $this->belongsTo(Vehiculo::class);
    }
}
