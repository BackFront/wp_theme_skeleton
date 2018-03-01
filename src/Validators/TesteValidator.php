<?php

namespace App\Validators {
    class TesteValidator extends \Backfront\Validator\Validator
    {
        public $rules = ['name' => 'required', 'email' => 'required|email', 'password' => 'required|min:6', 'confirm_password' => 'required|same:password'];
    }
}
