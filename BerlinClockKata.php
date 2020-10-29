<?php


class BerlinClockKata {


    public function translateToBerlinClokTime(string $naturalHour) : string {
        $seconds = substr($naturalHour, 6)."\n";  // Second
        $minutes = substr($naturalHour, 3, 2)."\n";  // Minute
        $hours = substr($naturalHour, 0, 2)."\n";  // Hours
        return $this->translateMinuteToBerlinClokTime($minutes);
    }

    public function translateMinuteToBerlinClokTime(string $minute) : string {
        $minuteEnInt = intval($minute);
        if($minuteEnInt % 5 == 0){
            return "XXXX";
        }elseif($minuteEnInt % 5 == 1){
            return "JXXX";
        }elseif($minuteEnInt % 5 == 2) {
            return "JJXX";
        }elseif($minuteEnInt % 5 == 3) {
            return "JJJX";
        }else{
            return "JJJJ";
        }
    }

}