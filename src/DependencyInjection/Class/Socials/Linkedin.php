<?php 

namespace Mazed\DesignPatterns\DependencyInjection\Class\Socials;

class Linkedin implements SocialInterface{
    public function post($content){
       echo 'Posted on Linkedin: ' . $content;
    }
}