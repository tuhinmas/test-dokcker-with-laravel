<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::get();

        return response()->json([
            'data' => $user,
        ]);
    }
}
