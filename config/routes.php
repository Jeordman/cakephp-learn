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
    });

    $routes->scope('/', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
        $builder->connect('/pages/*', 'Pages::display');
        $builder->fallbacks();
    });
};
