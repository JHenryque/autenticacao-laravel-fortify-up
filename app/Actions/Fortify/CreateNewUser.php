<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array<string, string> $input
     * @throws ValidationException
     */

    public function create(array $input): User
    {
        // error messeges $this->passwordRules()
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
                'password' => ['required','string','min:6','confirmed'],
            ],
            [
                'name.required' => 'O campo nome é obrigatorio',
                'name.string' => 'O campo nome tem que ser uma string',
                'name.max' => 'O campo nome tem mais de :max caracteres',
                'email.required' => 'O campo E-mail e obrigatorio',
                'email.email' => 'O campo E-mail deve ser um email valido',
                'email.unique'=> 'O email informado já esta em uso',
                'password.required' => 'O campo senha e obrigatorio',
                'password.min' => 'o campo senha tem que ter mais de :min caracteres',
                'password.confirmed' => 'O campo senha não confere com a confirmaçao de senha',
            ],

        )->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }

}
