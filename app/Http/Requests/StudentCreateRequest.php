<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Summary of StudentCreateRequest
 */
class StudentCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'nis'       => 'unique:students|max:8|required',
            'name'      => 'max:50|required',
            'gender'    => 'required',
            // 'class'     => 'required',

        ];
    }

    /**
     * Summary of attributes
     * @return array<string>
     */
    public function attributes()
    {
        return [
            'class_id' => 'class',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Nama wajib diisi',
            'nis.required' => 'NIS wajib diisi',
            'nis.max' => 'NIS Maksimal :max Karakter',
            'gender.required' => 'Jenis Kelamin wajib diisi',
            'class.required' => 'Kelas wajib diisi',
        ];
    }
}
