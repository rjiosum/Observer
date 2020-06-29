<?php declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

use App\Login;
use App\LoginObserver;

$login = new Login();
$login->attach(new LoginObserver());
$login->login([
    'email' => 'olivia@gmail.com',
    'password' => 'secret'
]);