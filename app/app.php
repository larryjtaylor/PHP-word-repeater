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
        $phrase = $_GET['string'];
        $new_repeat_counter = new RepeatCounter($word, $sentence);
        $count = $new_repeat_counter->countRepeats($word, $sentence);

        var_dump($word);
        return $app['twig']->render('view_words.html.twig', array('show_count' => $count, 'show_word' => _GET['word'], 'show_string' => _GET['string']));
    });

    return $app;
?>
