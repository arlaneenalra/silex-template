<?php

// Load composer dependencies
require(__DIR__ . '/../vendor/autoload.php');

//use Silex\Application;
use SegmentNine\Silex\Application;
use Silex\Provider;

$app = new Application();
$app['debug'] = true;

// register core service providers
$app->register(new Provider\UrlGeneratorServiceProvider());
$app->register(
    new Provider\TwigServiceProvider(),
    array(
        'twig.path' => __DIR__ . '/../template'
    )
);


$app->get(
    '/', function () use ($app) {
        return $app->render('index.twig');
    }
);

$app->run();
