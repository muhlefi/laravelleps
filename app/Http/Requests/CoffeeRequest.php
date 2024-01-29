<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoffeeRequest extends FormRequest
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
                'nama' => 'required',
                'email' => 'required|email',
                'pesan' => 'required',
                'nomor_hp' => 'required', // Jika ini harus diisi, jika tidak ganti menjadi 'nullable'
                'menu' => 'required|in:1,2,3,4,5,6',
                'jumlah_pesanan' => 'required|integer',
                'alamat' => 'required',
        ];
    }
}
