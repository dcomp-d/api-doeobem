<?php


$app->get('/', 'HomeController:index');

$app->get('/home', function ($request, $response) {

    return $this->view->render($response, 'home.html');

});

$app->get('/users', function ($request, $response) {

    return 'Listar usuarios cadastrados';

});