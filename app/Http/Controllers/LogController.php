<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Log;

class LogController extends Controller
{
//    Saves the file given via POST.
    public function store(Request $request){

        // Check if all credentials are provided
        if (!empty($request->all(0)['username']) && !empty($request->all(0)['password'])) {

            $credentials = [
                'username' => $request->all(0)['username'],
                'password' => $request->all(0)['password']
            ];

        } else {
            return response('No or not enough credentials provided', 400);
        }

        // fetch saved credentials from DB
        $user = User::where('username', $credentials['username'])->first();

        // check if user exists
        if ($user == null){
           return response('User "' . $credentials['username'] . '" does not exist', 404);
        }

        // check if password matches the hashed one from DB
        if (Hash::check($credentials['password'], $user->password)) {

            // declare forbidden file extensions
            $forbiddenFiles = [
                'example1',
                'example2',
                'example3'
            ];

            // check if a file was uploaded
            if ($_FILES['file'] != null) {

                // check if file type is not of a forbidden file type
                // case-insensitive so 'pdf', 'PDF' and 'PdF' are the same
                foreach ($forbiddenFiles as $forbiddenFile) {
                    if (strtolower($request['file']->extension()) == strtolower($forbiddenFile)) {
                        return response('Unsupported file type: ' . $request['file']->extension(), 415);
                    }
                }

                // save file to storage in: 'app\[username]\[date_time].[original-extension]'
                $newFileName = date('dmY_his') . "." . $request['file']->extension();
                storage::putFileAs($credentials['username'], $_FILES['file']['tmp_name'], $newFileName);

                $log = new Log;
                $log->user_id = $user->user_id;
                $log->name = $newFileName;
                $log->file_path = 'storage\app\\'.$credentials['username'].'\\'.$newFileName;
                $log->save();

            } else {
                return response('No file provided', 400);
            }

            // respond with status 200
            return response('Succes', 200);

        } else {
            return response('Invalid credentials', 401);
        }
    }
    // read requested file
    public function read($id){
        $file = Log::all()->where('log_id', '=', $id)->first();
        $uid = $file->user_id;
        $user = User::all()->where('user_id', '=', $uid)->first();

        echo file_get_contents(base_path($file->file_path));

    }
}
