<?php


class BerlinClockKata {


    public function translateToBerlinClokTime(string $naturalHour) : string {
        $seconds = substr($naturalHour, 6)."\n";  // Second
        $minutes = substr($naturalHour, 3, 2)."\n";  // Minute
        $hours = substr($naturalHour, 0, 2)."\n";  // Hours

        return $this->translateAbove5HoursToBerlinClockTime($hours)."\n".$this->translateHourToBerlinClockTime($hours)."\n".$this->translateAbove5MinuteToBerlinClockTime($minutes)."\n".$this->translateMinuteToBerlinClockTime($minutes);
    }

    public function translateMinuteToBerlinClockTime(string $minute) : string {
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

   public function translateAbove5MinuteToBerlinClockTime(string $minute) : string {
       $lights = "";
       $minuteEnInt = intval($minute);
       if ($minuteEnInt >= 5) {
           $nbrLights = $minuteEnInt / 5;
           $nbrLightsEnInt = intval($nbrLights);
           for ($i = 1; $i <= 11; $i++) {
               if ($i <= $nbrLightsEnInt) {
                   if ($i % 3 == 0) {
                       $lights .= 'R';
                   }else {
                       $lights .= 'J';
                   }
               }else{
                   $lights .= 'X';
               }
           }
           return $lights;
       }
       return $lights = "XXXXXXXXXXX";
   }

    public function translateHourToBerlinClockTime(string $hours) : string {
        $hoursEnInt = intval($hours);
        if($hoursEnInt% 5 == 0){
            return "XXXX";
        }elseif($hoursEnInt % 5 == 1){
            return "RXXX";
        }elseif($hoursEnInt % 5 == 2) {
            return "RRXX";
        }elseif($hoursEnInt % 5 == 3) {
            return "RRRX";
        }else{
            return "RRRR";
        }
    }

    public function translateAbove5HoursToBerlinClockTime(string $hours) : string {
        $lights = "";
        $hoursEnInt = intval($hours);
        if ($hoursEnInt >= 5) {
            $nbrLights = $hoursEnInt / 5;
            $nbrLightsEnInt = intval($nbrLights);
            for ($i = 0; $i < 4; $i++) {
                if ($i < $nbrLightsEnInt) {
                    $lights .= 'R';
                }else{
                    $lights .= 'X';
                }
            }
            return $lights;
        }
        return $lights = "XXXX";
    }


}