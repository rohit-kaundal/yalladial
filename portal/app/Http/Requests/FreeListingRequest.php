<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FreeListingRequest extends Request
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

        'companyname' => 'required',
        'city' => 'required',
        'pincode' => 'required'
        'email'=> 'required|email'
       
        ];
    }
}
