<?php

namespace App\Core\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    function render()
    {
        http_response_code(404);
        include (APP.'views'.DS.'error.php');
        die();
    }
}