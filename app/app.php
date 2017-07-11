<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/WordCheck.php';


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {
        return $app['twig']->render('words.html.twig');
    });

    $app->get('/view_repeats', function() use($app) {
        $word = $_GET['word'];
        $string = $_GET['string'];
        $new_repeat_counter = new RepeatCounter($string, $word);
        $count = $new_repeat_counter->countRepeats($string, $word);

        return $app['twig']->render('view_words.html.twig', array('show_word' => $_GET['word'], 'show_count' => $count));
    });

    return $app;
?>
