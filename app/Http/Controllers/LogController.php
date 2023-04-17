<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LogController extends Controller
{
//    Saves the file given via POST.
    public function store(Request $request){

        $credentials = [
            'username' => $request->all(0)['siteName'],
            'password' => $request->all(0)['token']
        ];

        $savedCredentials = DB::table('users')->where('username', $credentials['username'])->first();

        if (Hash::check($credentials['password'], $savedCredentials->password)) {

//            storage::putFile($credentials['username'], $_FILES['imgUpload']['tmp_name']);

            storage::putFileAs($credentials['username'], $_FILES['imgUpload']['tmp_name'], date('dmY_his') . "." . $request['imgUpload']->extension());

            return view('200');

        } else {

            return redirect('403');
        }
    }
}
