<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegFormRequest extends Request
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
            'english_name'=>'required',
            'father_name'=>'required',
            'mother_name'=>'required',
            'date_of_birth'=>'required',
            'village'=>'required',
            'post_office'=>'required',
            'upazila'=>'required',
            'district'=>'required',
            'id_code'=>'required',
            'organization'=>'required',
            'e-mail'=>'required',
            'subject'=>'required',
            'board'=>'required',
            'contact_person_name'=>'required',
            'contact_person_address'=>'required',
            'contact_person_tel'=>'required',
            'mobile'=>'required|min:11',
        ];
    }
}
