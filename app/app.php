<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Anagram.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('words.html.twig');
    });
    $app->get('/view_repeats', function() use ($app){
        return $app['twig']->render('views_words.html.twig')
    });
    return $app;
?>
