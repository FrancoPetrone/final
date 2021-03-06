<?php

namespace App\Http\Requests\Favoritos;

use Illuminate\Foundation\Http\FormRequest;

class CreateFavoritosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "producto_id" => "required|exists:productos,id"
        ];
    }
}
