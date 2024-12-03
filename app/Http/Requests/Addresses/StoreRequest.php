<?php

namespace App\Http\Requests\Addresses;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            //
            'street' => "required|min:5|max:50|",
            'internal_num' => "required|integer",
            'external_num' => "required|integer",
            'neighborhood' => "required|min:5|max:50|",
            'town' => "required|min:5|max:50|",
            'state' => "required|min:5|max:50|",
            'country' => "required|min:5|max:50|",
            'postal_code' => "required|integer",
            'references' => "required|min:5|max:50|",
            'client_id' => "required|integer"
        ];
    }
}
