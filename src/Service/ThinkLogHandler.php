<?php


namespace App\Service;


use think\facade\Log;

class ThinkLogHandler extends AppLoggerAbstract
{

    public static $logger = null;


    /**
     * @return null
     */
    public static function getLogger()
    {
        if (self::$logger) {
            return self::$logger;
        }
        Log::init([
            'default' => 'file',
            'channels' => [
                'file' => [
                    'type' => 'file',
                    'path' => './logs/',
                ],
            ],
        ]);
        self::$logger = new self();
        return self::$logger;
    }

    public function info($message)
    {
        // TODO: Implement info() method.
        Log::info(strtoupper($message));
    }

    public function error($message)
    {
        // TODO: Implement error() method.
        Log::error(strtoupper($message));
    }


    public function debug($message)
    {
        // TODO: Implement debug() method.
        Log::debug(strtoupper($message));
    }
}
