<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    /*
             $table->string('name');
            $table->string('apellido');
            $table->integer('edad');
            $table->integer('deuda');
    */
    protected $fillable = ['name','apellido','edad','deuda'];
}
