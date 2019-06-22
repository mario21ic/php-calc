<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });

    $app->get('/greeting/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/greeting' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });

    $app->get('/add/{number1}/{number2}', function (Request $request, Response $response, array $args) use ($container) {
        $container->get('logger')->info("Slim-Skeleton '/add' route");
        $result = $args['number1'] + $args['number2'];
        $data = array('status' => True, 'result' => $result);

        return json_encode($data);
    });

    $app->get('/sub/{number1}/{number2}', function (Request $request, Response $response, array $args) use ($container) {
        $container->get('logger')->info("Slim-Skeleton '/sub' route");
        $result = $args['number1'] - $args['number2'];
        $data = array('status' => True, 'result' => $result);

        return json_encode($data);
    });

    $app->get('/mul/{number1}/{number2}', function (Request $request, Response $response, array $args) use ($container) {
        $container->get('logger')->info("Slim-Skeleton '/sub' route");
        $result = $args['number1'] * $args['number2'];
        $data = array('status' => True, 'result' => $result);

        return json_encode($data);
    });

    $app->get('/div/{number1}/{number2}', function (Request $request, Response $response, array $args) use ($container) {
        $container->get('logger')->info("Slim-Skeleton '/sub' route");
        $result = $args['number1'] / $args['number2'];
        $data = array('status' => True, 'result' => $result);

        return json_encode($data);
    });
};
