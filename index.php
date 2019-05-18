<?php
/**
 * Silence is gold
 */
if(!defined('ABSPATH')) die('No direct script access allowed');
//echo $container['HelloWorld'];

//Validator Teste
//echo "<hr>Validator deste";
//$valid = (new \App\Validators\TesteValidator())->with(['name' => '', 'email' => 'emialdot.net', 'password' => 'req23', 'confirm_password' => 'req123'])->passesOrFail();
//echo "<pre>";
//var_dump($valid);
//echo "</pre>";

// Load the layout
//var_dump($app);

echo $app->view->render('layouts/index.twig', []);
