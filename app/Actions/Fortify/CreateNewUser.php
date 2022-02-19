<?php

namespace App\Actions\Fortify;

use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamJuniorMember;
use App\Models\Bionix\TeamSeniorData;
use App\Models\Bionix\TeamSeniorMember;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        Validator::make($input, [
            'password' => $this->passwordRules(),
            'name' => 'required|string',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class, 'email'),
            ],
            'phone_number' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'jenjang'=>'required|string'
        ])->validate();
        $member_data = Member::create([
            'jenjang' => $input['jenjang']
        ]);
        return User::create([
            'name' => $input['name'],
            'no_hp' => $input['phone_number'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'userable_id' => $member_data->id,
            'userable_type' => 'App\Models\Member'
        ]);
    }
}
