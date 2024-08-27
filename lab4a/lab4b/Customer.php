<?php

class Customer {
    public $name;
    public $address;
    public $dob;
    public $cardNumber;
    public $pin;

    public function verifyPasssword(){
        return false;
    }

}