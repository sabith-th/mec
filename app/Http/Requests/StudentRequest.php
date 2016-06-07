<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StudentRequest extends Request
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
            'roll_no'=>['required', 'regex:/[B,M][0-9]{6}ME/'],
            'name'=>'required|min:3',
            'stream'=>'required|in:B-Tech,M-Tech',
            'admission_year'=>['required', 'regex:/20[0-1][0-9]/']
        ];
    }
}
