<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Mazed\DesignPatterns\Repository\Class\BlogApplication;
use Mazed\DesignPatterns\Repository\Class\MySQLArticleRepository;

$blog = new BlogApplication(new MySQLArticleRepository);

$article = $blog->createArticle('My first blog post', 'Hello world!');

echo "<pre>";
echo print_r($article, true);
echo "</pre>";
/*
The repository pattern is a design pattern that used for business model and database source separated.
This pattern help code more flexible and easy to maintain.
When you want to change database source, you just change the repository class.
Like example suppose you are using MySQL database and you want to change to MongoDB database without change business logic code.
 */
