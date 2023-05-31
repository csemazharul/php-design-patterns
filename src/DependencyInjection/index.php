<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Mazed\DesignPatterns\DependencyInjection\Class\Social;
use Mazed\DesignPatterns\DependencyInjection\Class\Socials\Facebook;
use Mazed\DesignPatterns\DependencyInjection\Class\Socials\Linkedin;
use Mazed\DesignPatterns\DependencyInjection\Class\Socials\Twitter;
use Mazed\DesignPatterns\Singleton\class\DatabaseConnection;

$social = new Social(new Facebook());
$social->post('Hello World!');
echo nl2br("\n");

$social= new Social(new Twitter());
$social->post('Hello World!');
echo nl2br("\n");

$social= new Social(new Linkedin());
$social->post('Hello World!');


?>