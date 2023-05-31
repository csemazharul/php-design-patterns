<?php 

namespace Mazed\DesignPatterns\DependencyInjection\Class\Socials;

class Twitter implements SocialInterface{
    public function post($content){
        echo 'Posted on Twitter: ' . $content;
    }
}