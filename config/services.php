<?php

use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;

$di = new FactoryDefault();

$di->set('volt', function($view, $di) {
    $volt = new Volt($view, $di);
    $volt->setOptions(array(
        'compiledPath'      => __DIR__.'/../var/cache/volt/',
        'compiledExtension' => '.compiled'
    ));
    return $volt;
});

$di->set('view', function() {
    $view = new View();
    $view->setViewsDir("../apps/views/");
    $view->registerEngines(array(
        ".volt" => 'volt',
    ));
    return $view;
});
