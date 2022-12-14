<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BicycleStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'make' => 'required',
            'model' => 'required',
            'size' => 'required',
            'color' => 'required',
            'price' => 'required',
            'make_date' => 'required',

        ];
    }

    public function wantsJson() {
        return true;
    }
}
