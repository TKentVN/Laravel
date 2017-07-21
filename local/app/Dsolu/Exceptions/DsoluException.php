<?php

/**
 * Created by Dsolu Viet Nam.
 * User: REVKent
 * Date: 02.06.2017
 * Time: 21:47
 */
Namespace App\Dsolu\Exceptions;

use Exception;

class DsoluException extends Exception
{
    public function __construct($message, $code, Exception $previous = NULL)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ":[{$this->code}]: {$this->message}\n";
    }
}
