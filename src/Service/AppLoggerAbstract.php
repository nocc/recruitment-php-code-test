<?php


namespace App\Service;


abstract class AppLoggerAbstract
{
    abstract public function info($message);

    abstract public function error($message);

    abstract public function debug($message);
}
