<?php

use Phalcon\Mvc\Application;

class Bootstrap extends Application
{
    /**
     * @param \Phalcon\DI $di
     */
    public function __construct($di)
    {
        parent::__construct($di);
        $di = $this->getDI();
    }

}
