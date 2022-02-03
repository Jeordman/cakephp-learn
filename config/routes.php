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

    // create a route listening to /posts/create
    // this will be handled by the PostsController::create() method
    $routes->connect('/create', ['controller' => 'Posts', 'action' => 'create']);

    // route for editing a post
    $routes->connect('/:id/edit', ['controller' => 'Posts', 'action' => 'edit'], ['id' => '\d+', 'pass' => ['id']]);

    // route for hello
    // get name from query params
    $routes->connect('/hello', ['controller' => 'Posts', 'action' => 'hello']);
  });

  $routes->prefix('admin', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Dashboard', 'action' => 'index']);
    $routes->connect('/create', ['controller' => 'Posts', 'action' => 'create']);
  });

  $routes->scope('/', function (RouteBuilder $builder) {
    $builder->connect('/', ['controller' => 'Posts', 'action' => 'index', 'home']);
    $builder->connect('/pages/*', 'Pages::display');
    $builder->fallbacks();
  });
};
