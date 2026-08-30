<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponses;
use App\Http\Requests\ApiLoginRequest;

class AuthController extends Controller
{
    use ApiResponses;
    
    public function login(ApiLoginRequest $request){
        return $this->ok($request->get('email'));


       // return response()->json([
        //     'message' => 'Hello login'
        // ], 200);
    }
    // public function login(ApiLoginRequest $request){
    //      return $this->ok ;(request->get('email'));

    // }
     public function register(){
            return $this->ok('register');
        }
    }
