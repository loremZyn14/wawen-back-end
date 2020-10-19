<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(User $account)
    {
        return User::all()->reject(function($user) use ($account){
            return $user->id == $account->id;
        });
    }
}
