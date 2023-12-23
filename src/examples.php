<?php
require_once 'Respond.php';

use Abdulbaset\ResponseFormatTrait\Respond;

echo Respond::toApi(
        200, // status
        'successful response', // message
        'details response with status code 200', // details
        ['testOne', 'testTwo'] // data
    );

// echo json_encode(Respond::getStatusCodeSupported());


