<?php

namespace Abdulbaset\ResponseFormatTrait;

trait Respond
{
    /**
     * Get a mapping of HTTP status codes to messages and details.
     *
     * @return array
     */
    public static function getStatusCodeSupported()
    {
        // ... (list of HTTP status codes with messages and details)
        $array = [
            100 => ['message' => 'Continue', 'details' => 'The server has received the request headers and the client should proceed to send the request body.'],
            101 => ['message' => 'Switching Protocols', 'details' => 'The requester has asked the server to switch protocols and the server has agreed to do so.'],
            102 => ['message' => 'Processing', 'details' => 'The server is processing the request, but no response is available yet.'],
            103 => ['message' => 'Early Hints', 'details' => 'Used to return some response headers before final HTTP message.'],
            200 => ['message' => 'OK', 'details' => 'The request was successful.'],
            201 => ['message' => 'Created', 'details' => 'The resource was successfully created.'],
            202 => ['message' => 'Accepted', 'details' => 'The request has been accepted for processing, but the processing has not been completed.'],
            203 => ['message' => 'Non-Authoritative Information', 'details' => 'The server is a transforming proxy that received a 200 OK from its origin, but is returning a modified version of the origin\'s response.'],
            204 => ['message' => 'No Content', 'details' => 'There is no content to send for this request.'],
            205 => ['message' => 'Reset Content', 'details' => 'The user agent should reset the document view that caused the request to be sent.'],
            206 => ['message' => 'Partial Content', 'details' => 'The server is delivering only part of the resource due to a range header sent by the client.'],
            300 => ['message' => 'Multiple Choices', 'details' => 'Indicates multiple options for the resource from which the client may choose.'],
            301 => ['message' => 'Moved Permanently', 'details' => 'This and all future requests should be directed to the given URI.'],
            302 => ['message' => 'Found', 'details' => 'Tells the client to look at (browse to) another URL.'],
            303 => ['message' => 'See Other', 'details' => 'The response to the request can be found under another URI using a GET method.'],
            304 => ['message' => 'Not Modified', 'details' => 'Indicates that the resource has not been modified since the version specified by the request headers.'],
            305 => ['message' => 'Use Proxy', 'details' => 'Deprecated and is not used.'],
            307 => ['message' => 'Temporary Redirect', 'details' => 'The request should be repeated with another URI; however, future requests should still use the original URI.'],
            308 => ['message' => 'Permanent Redirect', 'details' => 'Similar to 301, but does not allow changing the request method from POST to GET.'],
            400 => ['message' => 'Bad Request', 'details' => 'The server cannot or will not process the request due to an apparent client error.'],
            401 => ['message' => 'Unauthorized', 'details' => 'Similar to 403 Forbidden, but specifically for authentication purposes.'],
            402 => ['message' => 'Payment Required', 'details' => 'Reserved for future use.'],
            403 => ['message' => 'Forbidden', 'details' => 'The client does not have the necessary permission.'],
            404 => ['message' => 'Not Found', 'details' => 'The server cannot find the requested resource.'],
            405 => ['message' => 'Method Not Allowed', 'details' => 'The method specified in the request is not allowed for the resource identified by the request URI.'],
            406 => ['message' => 'Not Acceptable', 'details' => 'The server cannot produce a response matching the list of acceptable values defined in the request\'s headers.'],
            407 => ['message' => 'Proxy Authentication Required', 'details' => 'The client must first authenticate itself with the proxy.'],
            408 => ['message' => 'Request Timeout', 'details' => 'The server timed out waiting for the request.'],
            409 => ['message' => 'Conflict', 'details' => 'Indicates that the request could not be processed because of conflict in the current state of the resource.'],
            410 => ['message' => 'Gone', 'details' => 'The requested resource is no longer available at the server and no forwarding address is known.'],
            411 => ['message' => 'Length Required', 'details' => 'The server refuses to accept the request without a defined Content-Length.'],
            412 => ['message' => 'Precondition Failed', 'details' => 'One or more conditions given in the request header fields evaluated to false when tested on the server.'],
            413 => ['message' => 'Payload Too Large', 'details' => 'The server is refusing to process a request because the request payload is larger than the server is willing or able to process.'],
            414 => ['message' => 'URI Too Long', 'details' => 'The URI provided was too long for the server to process.'],
            415 => ['message' => 'Unsupported Media Type', 'details' => 'The server is refusing to service the request because the payload is in a format not supported by the requested resource for the requested method.'],
            416 => ['message' => 'Range Not Satisfiable', 'details' => 'The client has asked for a portion of the file, but the server cannot supply that portion.'],
            417 => ['message' => 'Expectation Failed', 'details' => 'The server cannot meet the requirements of the Expect request-header field.'],
            418 => ['message' => "I'm a teapot", 'details' => 'This code was defined in 1998 as one of the traditional IETF April Fools\' jokes.'],
            421 => ['message' => 'Misdirected Request', 'details' => 'The request was directed at a server that is not able to produce a response.'],
            422 => ['message' => 'Unprocessable Entity', 'details' => 'The request was well-formed but was unable to be followed due to semantic errors.'],
            423 => ['message' => 'Locked', 'details' => 'The resource that is being accessed is locked.'],
            424 => ['message' => 'Failed Dependency', 'details' => 'The request failed because it depended on another request and that request failed.'],
            425 => ['message' => 'Too Early', 'details' => 'Indicates that the server is unwilling to risk processing a request that might be replayed.'],
            426 => ['message' => 'Upgrade Required', 'details' => 'The server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol.'],
            428 => ['message' => 'Precondition Required', 'details' => 'The origin server requires the request to be conditional.'],
            429 => ['message' => 'Too Many Requests', 'details' => 'The user has sent too many requests in a given amount of time.'],
            431 => ['message' => 'Request Header Fields Too Large', 'details' => 'The server is unwilling to process the request because its header fields are too large.'],
            451 => ['message' => 'Unavailable For Legal Reasons', 'details' => 'The user requested a resource that is part of any legal block imposed on that resource.'],
            500 => ['message' => 'Internal Server Error', 'details' => 'The server encountered an unexpected condition that prevented it from fulfilling the request.'],
            501 => ['message' => 'Not Implemented', 'details' => 'The server does not support the functionality required to fulfill the request.'],
            502 => ['message' => 'Bad Gateway', 'details' => 'The server, while acting as a gateway or proxy, received an invalid response from an inbound server it accessed while attempting to fulfill the request.'],
            503 => ['message' => 'Service Unavailable', 'details' => 'The server is not ready to handle the request. Common causes include a temporary overloading or maintenance of the server.'],
            504 => ['message' => 'Gateway Timeout', 'details' => 'The server, while acting as a gateway or proxy, did not receive a timely response from an upstream server or some other auxiliary server it needed to access in order to complete the request.'],
            505 => ['message' => 'HTTP Version Not Supported', 'details' => 'The server does not support, or refuses to support, the major version of HTTP that was used in the request.'],
            506 => ['message' => 'Variant Also Negotiates', 'details' => 'Transparent content negotiation for the request results in a circular reference.'],
            507 => ['message' => 'Insufficient Storage', 'details' => 'The server is unable to store the representation needed to complete the request.'],
            508 => ['message' => 'Loop Detected', 'details' => 'The server detected an infinite loop while processing a request.'],
            510 => ['message' => 'Not Extended', 'details' => 'Further extensions to the request are required for the server to fulfill it.'],
            511 => ['message' => 'Network Authentication Required', 'details' => 'The client needs to authenticate to gain network access.'],
        ];
        return $array;
    }

    /**
     * Generate a JSON response for API consumption.
     *
     * @param int|null $status    HTTP status code.
     * @param string|null $message    Custom message for the response.
     * @param string|null $details    Additional details for the response.
     * @param array|null $data    Data to include in the response.
     * @return string    JSON-encoded response.
     */
    public static function toApi(int $status = null, string $message = null, string $details = null, $data = null)
    {
        return self::respond($status, $message, $details, $data);
    }

    /**
     * Generate a JSON response for web consumption.
     *
     * @param int|null $status    HTTP status code.
     * @param string|null $message    Custom message for the response.
     * @param string|null $details    Additional details for the response.
     * @param array|null $data    Data to include in the response.
     * @return string    JSON-encoded response.
     */
    public static function toWeb(int $status = null, string $message = null, string $details = null, $data = null)
    {
        return self::respond($status, $message, $details, $data);
    }

    /**
     * Internal method to generate a JSON response.
     *
     * @param int|null $statusCode    HTTP status code.
     * @param string|null $message    Custom message for the response.
     * @param string|null $details    Additional details for the response.
     * @param array|null $data    Data to include in the response.
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
        $statusMessage = isset($statusMessages[$statusCode]) ? $statusMessages[$statusCode]['message'] : '';
        $statusDetails = isset($statusMessages[$statusCode]) ? $statusMessages[$statusCode]['details'] : '';

        // Set default message and details if not provided
        if ($message === null) {
            $message = $statusMessage;
        }
        if ($details === null) {
            $details = $statusDetails;
        }

        // Ensure data is an array
        if (!is_array($data) and $data !== null) {
            $data = [$data];
        }

        // Set HTTP response code and headers
        http_response_code($statusCode);
        header('Content-Type: application/json');
        return json_encode([
            'status' => $statusCode,
            'message' => $message,
            'details' => $details,
            'data' => $data
        ]);
    }
}
