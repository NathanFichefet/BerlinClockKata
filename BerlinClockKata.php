<?php


class BerlinClockKata {


    public function translateToBerlinClokTime(string $naturalHour) : string {
        $seconds = substr($naturalHour, 6)."\n";  // Second
        $minutes = substr($naturalHour, 3, 2)."\n";  // Minute
        $hours = substr($naturalHour, 0, 2)."\n";  // Hours

        return $this->translateAbove5MinuteToBerlinClokTime($minutes). "\n" .$this->translateMinuteToBerlinClokTime($minutes);
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

   public function translateAbove5MinuteToBerlinClokTime(string $minute) : string {
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


}