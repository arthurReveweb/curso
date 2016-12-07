<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 26/11/2016
 * Time: 21:35
 */

namespace LaravelProject\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{
    protected $rules = [
        'name' => 'required|max:255',
        'responsible' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required'
    ];

}