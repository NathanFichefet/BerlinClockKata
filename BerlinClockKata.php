<?php


class BerlinClockKata
{


    public function translateToBerlinClokTime(string $naturalHour) : string
    {
        $seconds = substr($naturalHour, 6)."\n";  // Second
        $minutes = substr($naturalHour, 3, 2)."\n";  // Minute
        $hours = substr($naturalHour, 0, 2)."\n";  // Hours
        return $this->translateMinuteToBerlinClokTime($minutes);
    }

    public function translateMinuteToBerlinClokTime(string $minute) : string
    {
        return "XXXX";
    }
}