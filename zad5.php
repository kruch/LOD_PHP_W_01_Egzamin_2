<?php

require_once dirname(__FILE__) . '/User.php';

class VIPUser extends User {

    public $vipCardNumber;

    public function __construct($mail, $surname, $name, $vipCardNumber) {
        parent::__construct($mail, $surname, $name);
        if ($vipCardNumber == true) {
            $this->setvipCardNumber($vipCardNumber);
        } else {
            $this->setvipCardNumber(null);
        }
    }

    public function setvipCardNumber($vipCardnumber) {
        $this->vipCardNumber = $vipCardNumber;
    }

    public function getVipCardNumber() {
        return $this->vipCardNumber;
    }

    public static function checkCard($newNumber) {
        if($newNumber>999 && $newNumber%2==0){
            return true;
        }else false;
    }

}
