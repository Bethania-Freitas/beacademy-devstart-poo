<?php

include '../vendor/autoload.php';

use App\Controller\ErrorController;
use App\Controller\IndexController;
use App\Controller\ProductController;


$url = explode('?' , $_SERVER['REQUEST_URI'])[0];

if ($url === '/'){
    $c = new IndexController();
    $c->indexAction();
} elseif($url === '/login') {
    $c = new IndexController();
    $c->loginAction();
} elseif($url ==='/produtos'){
    $p = new ProductController();
    $p->listAction();
} else {
    $e = new ErrorController();
    $e->notFoundAction();
}

