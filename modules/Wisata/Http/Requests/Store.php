<?php

namespace Modules\Wisata\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required'],
            'content' => ['required'],
            'status' => ['required'],
            'file' => ['required'],
            'nama_penyedia' => ['required'],
            'telepon_penyedia' => ['required'],
            'kategori_wisata' => ['required'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
