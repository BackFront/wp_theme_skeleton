<?php

use Jonsa\PimpleResolver\ServiceProvider;

$container = new Pimple\Container;
$container->register(new ServiceProvider);

//Teste

//var_dump($container['make'](\App\Validators\TesteValidator::class)->with(['name' => '', 'email' => 'emialdot.net', 'password' => 'req23', 'confirm_password' => 'req123'])->passesOrFail());
$container['HelloWorld'] = '<h1>Hello World</h1>';