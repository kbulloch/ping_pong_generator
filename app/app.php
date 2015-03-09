<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('pingpong_form.twig');
    });

    $app->get("/pingpong_result", function() use ($app) {

        $ping_pong_generator = new PingPongGenerator;
        $the_answer = $ping_pong_generator->generatePingPongArray($_GET['user_input']);

        return $app['twig']->render('pingpong_result.twig', array('result' => $the_answer));
    });

    return $app;

?>
