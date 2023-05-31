<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Log;

class UserController extends Controller
{
    public function show(Request $request, $id){
        $files = Log::all()->where('user_id', '=', $id);
        $user = User::all()->where('user_id', '=', $id)->first();

        echo '<h1>' . $user->username . "'s Uploaded Files</h1>";

        ?>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Uploaded at</th>
                <th>File Path</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($files as $file){
                    echo '<tr>'.
                             '<td>'.$file->log_id      .'</td>'.
                             '<td>'.$file->name        .'</td>'.
                             '<td>'.$file->created_at  .'</td>'.
                             '<td>'.$file->file_path   .'</td>'.
                         '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <?php
    }
}
