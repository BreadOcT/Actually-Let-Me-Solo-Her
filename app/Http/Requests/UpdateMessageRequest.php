<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMessageRequest extends FormRequest
{
    public function authorize(): bool { return auth()->check() && auth()->user()->role === 'admin'; }
    public function rules()
    {
        return [
            'reply' => 'nullable|string',
            'status' => 'required|in:Belum,Sudah'
        ];
    }
}
