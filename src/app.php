<?php

// Load composer dependencies
require(__DIR__ . '/../vendor/autoload.php');

//use Silex\Application;
use SegmentNine\Silex\Application;
use Silex\Provider;

$app = new Application();

// register core service providers
$app->register(new Provider\SessionServiceProvider());
$app->register(new Provider\TranslationServiceProvider());
$app->register(new Provider\ValidatorServiceProvider());
$app->register(new Provider\FormServiceProvider());
$app->register(
    new Provider\TwigServiceProvider(),
    array(
        'twig.path' => __DIR__ . '/../template'
    )
);
$app->register(new Provider\UrlGeneratorServiceProvider());
$app->register(
    new Igorw\Silex\ConfigServiceProvider(__DIR__ . '/../config/config.json')
);

$app->get(
    '/', function () use ($app) {
        return $app->render('index.twig');
    }
);

$app->run();
