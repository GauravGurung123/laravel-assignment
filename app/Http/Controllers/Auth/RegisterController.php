<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'alpha', 'max:255', 'min:3'],
            'age' => ['required', 'integer','digits_between:2,3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg', 'max:6048'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ], $messages=[
            'name.alpha' => 'your name cannot contain number',
            'age.integer' => 'Age must be a number',
        ] );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if(isset($data['image'])) {
            $imgName = $data['image']->getClientOriginalName();
            $data['image']->move(public_path('images'), $imgName);
        }else{
            $imgName=NULL;
        }

        // dd($img);
        return User::create([
            'name' => $data['name'],
            'age' => $data['age'],
            'bio' => $data['bio'],
            'email' => $data['email'],
            'image' => $imgName,
            'password' => Hash::make($data['password']),
        ]);
    }
}
