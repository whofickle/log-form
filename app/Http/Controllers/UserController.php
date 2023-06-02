<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Log;

class UserController extends Controller
{
    public function userView($id){
        $files = Log::all()->where('user_id', '=', $id);
        $username = User::all()->where('user_id', '=', $id)->first()->username;

        return view('userView', [
            'files' => $files,
            'username' => $username,
        ]);
    }
}
