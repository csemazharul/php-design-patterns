<?php

namespace Mazed\DesignPatterns\DependencyInjection\Class;

use Mazed\DesignPatterns\DependencyInjection\Class\Socials\SocialInterface;

class Social implements SocialInterface{
    private $socialNetwork;

    public function __construct(SocialInterface $socialNetwork){
        $this->socialNetwork = $socialNetwork;
    }

    public function post($content){
        $this->socialNetwork->post($content);
    }
}