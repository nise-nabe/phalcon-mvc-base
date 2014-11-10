<?php

error_reporting(E_ALL);

try {
    /** Loader */
    require __DIR__ . '/../config/loader.php';
    /** Config */
    require __DIR__ . '/../config/config.php';
    /** Services */
    require __DIR__ . '/../config/services.php';
    /** Bootstrap */
    $bootstrap = new Bootstrap($di);

    /** Handle the request */
    $response = $bootstrap->handle();
    echo $response->getContent();
} catch (Phalcon\Exception $e) {
    echo $e->getMessage();
} catch (PDOException $e) {
    echo $e->getMessage();
}