<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($fields);

        $token = $user->createToken($request->name);

        return [
            'message' => 'A user has been registered!',
            'registered_user' => $user,
            'token' => $token->plainTextToken
        ];
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return [
                'message' => 'Incorrect credentials.'
            ];
        }

        $token = $user->createToken($request->name . "-> login");

        return [
            'message' => 'A user has been logged in.',
            'loggedin_user' => $user,
            'token' => $token->plainTextToken
        ];
    }

    public function logout(Request $request) {
        return 'logout';
    }
}
