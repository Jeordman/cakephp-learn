<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
  $routes->setRouteClass(DashedRoute::class);

  $routes->scope('/posts', function (RouteBuilder $routes) {
    // handle the /posts route
    // all routes that start with /posts will be handled by this scope
    // specify controller and action for default route (even though index is default)
    $routes->connect('/', ['controller' => 'Posts', 'action' => 'index']);
    /**
     * create a route listening to /posts:id
     * this will be handled by the PostsController::view() method
     * d+ is regex for digits
     * pass the id to the view method
     */
    $routes->connect('/:id', ['controller' => 'Posts', 'action' => 'view'], ['id' => '\d+', 'pass' => ['id']]);
  });

  $routes->scope('/', function (RouteBuilder $builder) {
    $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $builder->connect('/pages/*', 'Pages::display');
    $builder->fallbacks();
  });
};
