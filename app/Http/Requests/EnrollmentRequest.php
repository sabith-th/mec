<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EnrollmentRequest extends Request
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
            'roll_no'=>'required|exists:Students,roll_no',
            'course_id'=>'required|exists:Courses,course_id',
            'status'=>'required'
        ];
    }
}
