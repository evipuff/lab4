<?php
class Bank {
    public $code;
    public $address;

    public function __construct($code, $address) {
        $this->code = $code;
        $this->address = $address;
    }

    public function manages(){
        return false;
    }

    public function maintains(){
        return false;
    }
    
    public function getCode(){
        return $this->code;
    }

    public function getAddress(){
        return $this->address;
    }
}
