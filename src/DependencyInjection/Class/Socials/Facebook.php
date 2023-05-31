<?php 

namespace Mazed\DesignPatterns\DependencyInjection\Class\Socials;

class Facebook implements SocialInterface{
    public function post($content){
        echo 'Posted on Facebook: ' . $content;
    }
}