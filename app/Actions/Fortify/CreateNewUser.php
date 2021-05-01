<?php

namespace App\Actions\Fortify;

use App\Models\{User,Resa};
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Registered;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'firstname' => ['required', 'string', 'max:150'],
            'lastname'=>['required','string','max:150'],
            'address'=>['required','string','max:255'],
            'phone_number'=>['required','string',  'regex:/^((05)|(06)|(07))[0-9]{8}/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'firstname' => $input['firstname'],
            'lastname' =>$input['lastname'],
            'address'=>$input['address'],
            'phone_number'=>$input['phone_number'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
    public function autocomplete(Request $request){
        return view('autocomplete');
    }

    // Email
    protected function registered(Request $request, $user)
{
    $resa = Resa::firstOrFail();
    Mail::to($user)->send(new Registered($resa));
    $admins = User::whereAdmin(true)->get();
    foreach($admins as $admin) {
        // Notification à l'admin à mettre en place
    }        
    return redirect(route('adresses.create'))->with('message', config('messages.registered'));
}

}