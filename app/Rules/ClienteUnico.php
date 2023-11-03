<?php

namespace App\Rules;

use App\Models\Cliente;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ClienteUnico implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // no quiero que exista dos clientes con el mismo nombre;
        $clientes=Cliente::where("name","=", $value)->get();
        if($clientes->count()>0) {
            // falla, ya hay un cliente con ese nombre
            $fail('Ya existe un cliente con ese nombre '.$value);
        }
        // ok.

    }
}
