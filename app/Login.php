<?php declare(strict_types=1);

namespace App;

use SplObjectStorage;
use SplObserver;
use SplSubject;


class Login implements SplSubject
{
    private SplObjectStorage $observers;
    private string $signUpIp;
    private string $signInIp;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
        $this->signUpIp = '80.2.133.86';
        $this->signInIp = '80.2.122.86';
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getSignInIp(): string
    {
        return $this->signInIp;
    }

    public function login(array $credentials)
    {
        if($this->signUpIp != $this->signInIp){
            $this->notify();
        }
    }

}