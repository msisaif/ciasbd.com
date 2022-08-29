<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
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
            'phone'     => 'required|numeric|digits:11|exists:users,phone',
            'password'  => 'required|string|min:1|max:50',
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $user = User::query()
            ->where([
                'phone'     => $this->phone,
                'password'  => convert_uuencode($this->password),
            ])
            ->first();

        if(!$user) {
            throw ValidationException::withMessages([
                'password'  => __('auth.failed'),
            ]);
        }

        Auth::login($user, 1);
    }
}
