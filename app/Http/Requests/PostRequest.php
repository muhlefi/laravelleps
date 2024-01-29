<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

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
