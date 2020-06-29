<?php declare(strict_types=1);

namespace App;


use SplSubject;
use SplObserver;

class LoginObserver implements SplObserver
{

    public function update(SplSubject $subject)
    {
        echo 'Attempted login from: '. $subject->getSignInIp() . ' IP address.';
    }
}