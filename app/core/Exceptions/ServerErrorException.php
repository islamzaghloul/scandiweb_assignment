<?php

namespace App\Core\Exceptions;

use Exception;

class ServerErrorException extends Exception
{
    function render()
    {
        http_response_code(500);
        include (APP.'views'.DS.'error.php');
        die();
    }
}