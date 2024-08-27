<?php

class currentAccount extends Account{
    public $accountNumber;
    public $balance;

    public function withdraw(){
        return false;
    }
}