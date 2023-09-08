<?php

namespace Billyranario\ProstarterKit\App\Helpers;

use Illuminate\Support\Facades\Log;

class LoggerHelper
{

    /**
     * Log info
     *
     * @param string $message
     * @param mixed $data
     * @return void
     */
    public static function logInfo(string $message, mixed $data = null): void
    {
        Log::info($message, $data);
    }

    /**
     * Log success
     *
     * @param string $message
     * @param mixed $data
     * @return void
     */
    public static function logSuccess(string $message, mixed $data = null): void
    {
        Log::info("Success: " . $message, $data);
    }

    /**
     * Log warning
     *
     * @param string $message
     * @param mixed $data
     * @return void
     */
    public static function logWarning(string $message, mixed $data = null): void
    {
        Log::warning($message, $data);
    }

    /**
     * Log debug
     *
     * @param string $message
     * @param mixed $data
     * @return void
     */
    public static function logDebug(string $message, mixed $data = null): void
    {
        Log::debug($message, $data);
    }

    /**
     * Log critical
     *
     * @param string $message
     * @param mixed $data
     * @return void
     */
    public static function logCritical(string $message, mixed $data = null): void
    {
        Log::critical($message, $data);
    }

    /**
     * Log alert
     *
     * @param string $message
     * @param mixed $data
     * @return void
     */
    public static function logAlert(string $message, mixed $data = null): void
    {
        Log::alert($message, $data);
    }

    /**
     * Log emergency
     *
     * @param string $message
     * @param mixed $data
     * @return void
     */
    public static function logEmergency(string $message, mixed $data = null): void
    {
        Log::emergency($message, $data);
    }

    /**
     * Log notice
     *
     * @param string $message
     * @param mixed $data
     * @return void
     */
    public static function logNotice(string $message, mixed $data = null): void
    {
        Log::notice($message, $data);
    }

    /**
     * Log error
     * 
     * @param string $message
     * @param mixed $data
     * @return void
     */
    public static function logError(string $message, mixed $data = null): void
    {
        Log::error($message, $data);
    }

    /**
     * Log throw error
     *
     * @param \Throwable $th
     * @return void
     */
    public static function logThrowError(\Throwable $th): void
    {
        Log::error(
            "File: " . $th->getFile() . " at line " . $th->getLine() . "\n" .
                "Message: " . $th->getMessage()
        );
    }
}
