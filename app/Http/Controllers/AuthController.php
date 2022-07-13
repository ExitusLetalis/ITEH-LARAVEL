<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Došlo je do greške!', $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('TOKENREGISTER')->plainTextToken;

        $response = [
            'User info: ' => $user,
            'Token: ' => $token,
        ];

        return response()->json($response);
    }




    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Došlo je do greške!', $validator->errors()]);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json('Pogrešan email ili password!');
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('TOKENLOGIN')->plainTextToken;

        $response = [
            'User info: ' => $user,
            'Token: ' => $token,
        ];

        return response()->json($response);
    }



    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Korisnik je izlogovan!');
    }
}
