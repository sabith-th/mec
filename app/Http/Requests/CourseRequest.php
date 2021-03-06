<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CourseRequest extends Request
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
            'course_id'=>'required',
            'course_name'=>'required|min:3',
            'credits'=>['required','regex:/[1-4]/']
        ];
    }
}
