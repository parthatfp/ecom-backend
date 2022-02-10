<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function register(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->created_at = Carbon::now();
        $user->save();
        return $user;
    }
}
