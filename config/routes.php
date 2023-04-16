<?php
require_once('C:\wamp64\www\mvc\src\controller\FormController.php');

class Routes{
    public function rota(){
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
    }
}

