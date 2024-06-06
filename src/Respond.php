<?php
namespace Abdulbaset\ResponseFormatTrait;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Lang;

trait Respond
{
    protected static $supportedLanguages = ['en', 'ar', 'de', 'fr', 'es', 'it'];

    /**
     * Check if a language is supported.
     *
     * @param string $language Language code to check.
     * @return bool True if the language is supported, false otherwise.
     */
    public static function isLanguageSupported(string $language)
    {
        return in_array($language, self::$supportedLanguages);
    }

    /**
     * Get a mapping of HTTP status codes to messages and details.
     *
     * @return array
     */
    public static function getStatusCodeSupported()
    {
        // Get the configured language from the config file
        $language = config('response-format.language');

        // Check if the configured language is supported
        if (!self::isLanguageSupported($language)) {
            // Handle unsupported language
            // For example, you might log an error or use a fallback language
            $language = 'en'; // Fallback to English
        }

        // Supported status codes
        $statusCodes = [
            100, 101, 102, 103, 200, 201, 202, 203, 204, 205, 206,
            300, 301, 302, 303, 304, 305, 307, 308,
            400, 401, 402, 403, 404, 405, 406, 407, 408, 409, 410,
            411, 412, 413, 414, 415, 416, 417, 418, 421, 422, 423,
            424, 425, 426, 428, 429, 431, 451,
            500, 501, 502, 503, 504, 505, 506, 507, 508, 510, 511,
        ];

        // Retrieve status messages and details for the specified language
        $array = [];
        foreach ($statusCodes as $code) {
            $array[$code] = Lang::get("response-format-trait::messages.$code", [], $language);
        }

        return $array;
    }

    /**
     * Generate a JSON response for API consumption.
     *
     * @param int|null $status    HTTP status code.
     * @param string|null $message    Custom message for the response.
     * @param string|null $details    Additional details for the response.
     * @param array|object|null $data    Data to include in the response.
     * @return string    JSON-encoded response.
     */
    public static function formatApi(int $status = null, string $message = null, string $details = null, array|object $data = null)
    {
        return self::respond($status, $message, $details, $data);
    }

    /**
     * Internal method to generate a JSON response.
     *
     * @param int|null $statusCode    HTTP status code.
     * @param string|null $message    Custom message for the response.
     * @param string|null $details    Additional details for the response.
     * @param array|object|null $data    Data to include in the response.
     * @return string    JSON-encoded response.
     */
    private static function respond($statusCode = null, $message = null, $details = null,  $data = null)
    {
        // Set a default status code if none provided
        if ($statusCode === null) {
            $statusCode = 400;
        }

        // Get supported status messages and details
        $statusMessages = self::getStatusCodeSupported();
        $statusMessage = isset($statusMessages[$statusCode]) ? $statusMessages[$statusCode]['message'] : null;
        $statusDetails = isset($statusMessages[$statusCode]) ? $statusMessages[$statusCode]['details'] : null;

        // Set default message and details if not provided
        if ($message === null) {
            $message = $statusMessage;
        }
        if ($details === null) {
            $details = $statusDetails;
        }

        return Response::json([
            'status' => $statusCode,
            'message' => $message,
            'details' => $details,
            'data' => $data
        ], $statusCode);
    }
}
