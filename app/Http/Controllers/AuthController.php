<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function register(AuthRequest $request)
    {
        User::create([
            'username' => $request->validated()['username'],
            'email' => $request->validated()['email'],
            'password' => Hash::make($request->validated()['password'])
        ]);
    }

    public function login(AuthRequest $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'error' => ['The provided credentials are incorrect.'],
            ], 403);
        }

        $token = $user->createToken('access_token')->plainTextToken;

        return $user->withAccessToken($token);
    }

    public function logout()
    {
        Auth::logout();
    }

    // GOOGLE Authentication

     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->stateless()->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();

        return $user->token;
    }
}
