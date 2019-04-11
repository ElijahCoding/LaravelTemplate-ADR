<?php

namespace App\Http\Requests\Tech;

use Illuminate\Foundation\Http\FormRequest;

class TechOperationStoreRequest extends FormRequest
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
            'tech_operation_type_id' => 'required|exists:tech_operations_types,id',
            'title' => 'required'
        ];
    }
}
