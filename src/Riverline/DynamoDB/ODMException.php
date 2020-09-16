<?php


namespace Riverline\DynamoDB;

class ODMException extends \Exception { 

    public function __construct($message = null, $code = null, $ex= null) {
        parent::__construct($message,$code, $ex);
    }
}