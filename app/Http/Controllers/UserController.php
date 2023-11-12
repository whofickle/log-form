<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Log;

class UserController extends Controller
{
    public function getUsers(){
        $users = User::all();
        $username = User::all()->firstWhere('user_id', '=', $id)->username;

        return view('user/getUsers', [
            'users' => $users,
            'username' => $username,
        ]);
    }

    public function getUserFiles($id){
        $files = Log::all()->where('user_id', '=', $id);

        return view('user/getUserFiles', [
            'files' => $files,
        ]);
    }
}
