<?php

use app\models\User;

require(__DIR__ . '/_bootstrap.php');

$user = new User();

$user->username = "Alex";
$user->email = 'goric0312@mail.ru';

print_r($user->getAttributes());