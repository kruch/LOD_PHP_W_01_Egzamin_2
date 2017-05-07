<?php

class MyDate {

    private $day; //Wartość pomiędzy 0-31 nie powinna wychodzić pomiędzy te zakresy. Dla uproszczenia możesz założyć że każdy miesiąc ma 31 dni.
    private $month; //Wartość pomiędzy 0-12 nie powinna wychodzić pomiędzy te zakresy 
    private $year; //Wartość większa niż 0

    public function moveForwardByDay() {
        
    }

    public function __construct() {
        $this->day = 01;
        $this->month = 01;
        $this->year = 2000;
    }

    public function getMonth() {
        return $this->month;
    }

    public function setMonth($month) {
        if (is_integer($month) && $month > 0 && $month <= 12) {
            $this->month = $month;
        }
        else if($month>12){
            $this->setMonth(1);
            $this->setYear(+1);
        }
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        if (is_integer($year) && $year > 0) {
            $this->year = $year;
        }
    }

    public function getDay() {
        return $this->day;
    }

    public function setDay($day) {
        if ($day > 0 && $day <= 31 && is_integer($day)) {
            $this->day = $day;
        } else if($day>31){
            $this->setDay(1);
            $this->setMonth(+1);
        }
    }

}
