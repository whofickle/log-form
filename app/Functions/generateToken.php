<?php
use App\Models\User;

function generateToken($siteName)
{
    $user = User::find(1);

    $token = $user->createToken($siteName)->accessToken;

    return $token;
}
