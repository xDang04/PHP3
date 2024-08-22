<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Lấy user hiện tại
        $userId = $this->user()->id;
        return [
            //Bài 3: Xác thực Cập Nhật Hồ Sơ Người Dùng
            'fullname' => 'required|string',
            'email' => 'required|email|unique:users,email' . $userId,
            'phone' => 'required|regex:/^(\+84|0)[1-9][0-9]{8,9}$/',
            'avatar' => 'nullable|image|mimes:jpg,png|max:2048kb',
        ];
    }
}
