<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Signuprequest extends Request
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
            //
        'email' => 'required',
        'password' => 'required',
        'name' => 'required',
        'mobile' => 'required',
        'company' => 'required',
        'designation' => 'required'

        ];
    }

    public function response(array $errors)
    {
        return response()->json(['msg'=>'please fill all the field','status'=>0]);
    }
}
