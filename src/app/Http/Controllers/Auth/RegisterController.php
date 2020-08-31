<?php

namespace App\Http\Controllers\Auth;

use App\Events\Auth\UserRegistered;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {

    use RegistersUsers;

    protected $generatedPassword;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct() {
        $this->middleware('guest');
    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }

    protected function create(array $data) {

        $this->password = Str::random(8);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($this->password),
        ]);
    }

    protected function registered(Request $request, $user) {

        event(new UserRegistered($user, $this->password));

        $this->guard()->logout();

        return redirect($this->redirectPath())
            ->withSuccess('Thanks for registration! The password has been sent to your email.');
    }
}

