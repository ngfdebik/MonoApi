<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'region' => 'required|max:255',
            'locality' => 'required|max:255',
            'street' => 'required|max:255',
            'houseNumber' => 'required|integer',
            'postcode' => 'required|max:20',
        ];
    }
}
