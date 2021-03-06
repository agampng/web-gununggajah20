<?php

namespace Modules\Wisata\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Update extends Store
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
            'nama_penyedia' => ['required'],
            'telepon_penyedia' => ['required'],
            'email_penyedia' => ['required'],
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
