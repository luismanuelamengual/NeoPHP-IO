<?php

namespace NeoPHP\Io;

use Exception;

class IOException extends Exception {

    function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}