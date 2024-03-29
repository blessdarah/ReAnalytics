<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "name" => "required|string",
            "image" => "nullable",
            "summary" => "required|string",
            "detail" => "required|string",
            "status" => "required|string",
            "start_date" => "required|date|after:created_at",
            "end_date" => "required|date|after_or_equal:created_at",
        ];
    }
}