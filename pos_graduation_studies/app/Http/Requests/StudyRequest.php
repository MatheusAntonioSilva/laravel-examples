<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudyRequest extends FormRequest
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
            'description' => 'required|string',
            'date_init' => 'required|date',
            'date_finish' => 'required|date',
            'area_id' => 'required|numeric|exists:areas,id',
            'status' => [
                'required',
                Rule::in(['Finalizado', 'Em atraso', 'Em andamento'])
            ]
        ];
    }
}
