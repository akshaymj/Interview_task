<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request) {

    	$input = $request->only(['email', 'password']);

    	$token = auth()->attempt($input);

    	return $token;
    }
}
