    <?php

    class ATMTransactions {
        public $transactionID;
        public $date;
        public $type;
        public $amount;
        public $postBalance;

        public function modifies(){
            return false;
        }
    }