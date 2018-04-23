<?php

namespace Locadora\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminVehicleRequest extends FormRequest
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
            'category_id' => 'required',
            'model' => 'required',
            'brand'=> 'required',
            'color' => 'required',
            'engine' => 'required',
            'fuel' => 'required',
            'year' => 'required',
            'license' => 'required',
            'license_state' => 'required',
            'price' => 'required',
            'status' => 'required',
        ];
    }
}
