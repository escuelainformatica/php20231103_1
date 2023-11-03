<?php

namespace App\Http\Requests;

use App\Rules\ClienteUnico;
use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //  protected $fillable = ['name','apellido','edad','deuda'];
        return [
            'name'=>[new ClienteUnico,'required','max:20'],
            'apellido'=>['required','max:20'],
            'edad'=>['gte:18','lte:120'],
            'deuda'=>['gte:0']
            //
        ];
    }
    public function messages()
    {
        return [
            'required' => 'El campo <b>:attribute</b> es requerido',
            'gte'=>'El campo <b>:attribute</b> debe ser mayor o igual que <b>:value</b>'
        ];
    }
}
