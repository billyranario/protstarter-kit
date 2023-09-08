<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class LoggerHelper
{
    /**
     * Log error
     *
     * @param \Throwable $th
     * @return void
     */
    public static function logError(\Throwable $th): void
    {
        Log::error(
            "File: " . $th->getFile() . " at line " . $th->getLine() . "\n" .
            "Message: " . $th->getMessage()
        );
    }

    /**
     * Log info
     *
     * @param string $message
     * @return void
     */
    public static function logInfo($message): void
    {
        Log::info($message);
    }

    /**
     * Log success
     *
     * @param string $message
     * @return void
     */
    public static function logSuccess($message): void
    {
        Log::info("Success: " . $message);
    }
}
