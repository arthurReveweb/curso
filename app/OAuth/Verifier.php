<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 27/11/2016
 * Time: 14:39
 */

namespace LaravelProject\OAuth;

use Auth;

class Verifier
{
    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function verify($username, $password)
    {
        $credentials = [
            'email' => $username,
            'password' => $password,
        ];

        if(Auth::once($credentials)){
            return Auth::user()->id;
        }

        return false;
    }

}