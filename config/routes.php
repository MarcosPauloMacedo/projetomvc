<?php
require_once('C:\wamp64\www\cars\src\controller\FormController.php');

$routes = [
    '/' => [
        'controller' => 'FormController',
        'method' => 'index'
    ],
    '/add' => [
        'controller' => 'FormController',
        'method' => 'add'
    ],
    '/edit' => [
        'controller' => 'FormController',
        'method' => 'edit'
    ]
];

return $routes;
