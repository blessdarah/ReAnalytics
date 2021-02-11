<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            "flyer" => "nullable|image|max:700",
            "description" => "required|string",
            "venue" => "required|string",
            "start_date" => "required|date|after_or_equal:created_at",
            "end_date" => "nullable|date|after_or_equal:start_date",
        ];
    }

    /**
     * Return custom error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            "start_date.required" => "The event start date is required",
            "end_date.nullable" => "You need to provide a valid end date for the event",
        ];
    }
}