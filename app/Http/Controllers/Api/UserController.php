<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

    	$users = User::all();

    	try{
    		$users = auth()->userORFail();
    	} catch(\Tymon\JWTAuth\Exceptions\USerNotDefinedException $e) {
    		return response()->json(['error' => $e->getMessage()]);
    	}


    	return $users;
    }
}
