<?php
/**
 * Silence is gold
 */
if(!defined('ABSPATH')) die('No direct script access allowed');
echo $container['HelloWorld'];

//Validator Teste
echo "<hr> <h2>Validator deste</h2>";
$valid = (new \App\Validators\TesteValidator())->with(['name' => '', 'email' => 'emialdot.net', 'password' => 'req23', 'confirm_password' => 'req123'])->passesOrFail();
echo "<pre>";
var_dump($valid);
echo "</pre>";
