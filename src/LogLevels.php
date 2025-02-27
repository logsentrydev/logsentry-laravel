<?php

namespace LogSentry\Laravel;

class LogLevels
{
    public const EMERGENCY = 0;

    public const ALERT = 1;

    public const CRITICAL = 2;

    public const ERROR = 3;

    public const WARNING = 4;

    public const NOTICE = 5;

    public const INFO = 6;

    public const DEBUG = 7;

    public static function logLevelText($level)
    {
        $logLevelText = [
            self::EMERGENCY => 'emergency',
            self::ALERT => 'alert',
            self::CRITICAL => 'critical',
            self::ERROR => 'error',
            self::WARNING => 'warning',
            self::NOTICE => 'notice',
            self::INFO => 'info',
            self::DEBUG => 'debug',
        ];

        return $logLevelText[$level];
    }

    public static function logLevelColor($level)
    {
        $logLevelColor = [
            self::EMERGENCY => 'rose',
            self::ALERT => 'red',
            self::CRITICAL => 'orange',
            self::ERROR => 'amber',
            self::WARNING => 'yellow',
            self::NOTICE => 'sky',
            self::INFO => 'teal',
            self::DEBUG => 'zinc',
        ];

        return $logLevelColor[$level];
    }
}
