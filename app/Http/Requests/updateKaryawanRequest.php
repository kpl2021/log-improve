<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateKaryawanRequest extends FormRequest
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
             'name' => 'required|string',
             'nik' => 'required|numeric',
             'position' => 'required',
             'unit' => 'required',
             'no_telp' => 'required|numeric',
             'address' => 'required',

             /*
             'name' => ['required', 'max:255'],
             'nik' => ['required', 'digits:255'],
             'position' => ['required', 'max:100'],
             'unit' => ['required', 'max:100'],
             'no_telp' => ['required', 'digits:12'],
             'address' => ['required'],
             */
        ];
    }
}
