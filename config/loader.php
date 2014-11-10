<?php

use Phalcon\Loader;

$loader = new Loader();
$loader->registerDirs([
    '../apps',
]);

// composer を使う場合
//define('COMPOSER_DIR', '../vendor/composer');
//$loader->registerClasses(
//    require(COMPOSER_DIR.'/autoload_classmap.php')
//);

// ネームスペースを使う場合
//$loader->registerNamespaces([
//    'basename' => __dir__.'/../apps/',
//])

// phar で autoload が動かない対策
//$eventsManager = new \Phalcon\Events\Manager();
//$eventsManager->attach('loader', function($event, $loader, $path) {
//    if ($event->getType() === 'pathFound') {
//        if (Phar::running()) {
//            require_once $path;
//        }
//    }
//});
//$loader->setEventsManager($eventsManager);
$loader->register();
