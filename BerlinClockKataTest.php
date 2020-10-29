<?php

require "vendor/autoload.php";
require "BerlinClockKata.php";

use PHPUnit\Framework\TestCase;

define("today",date("H:i:s"));

class BerlinClockKataTest extends TestCase {

    public function test_convert_givenMinutesMod5Equals0_shouldReturnAllLightsOff(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClokTime('00');

        $this->assertEquals("XXXX", $actual);
    }

    public function test_convert_givenMinutesMod5Equals1_shouldReturnJXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClokTime('01');

        $this->assertEquals("JXXX", $actual);
    }

    public function test_convert_givenMinutesMod5Equals2_shouldReturnJJXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClokTime('02');

        $this->assertEquals("JJXX", $actual);
    }

    public function test_convert_givenMinutesMod5Equals3_shouldReturnJJJX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClokTime('03');

        $this->assertEquals("JJJX", $actual);
    }

    public function test_convert_givenMinutesMod5Equals4_shouldReturnJJJJ(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClokTime("04");

        $this->assertEquals("JJJJ", $actual);
    }

    public function test_convert_givenMinutesEquals5_ShouldReturnJXXXXXXXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClokTime("05");

        $this->assertEquals("JXXXXXXXXXX", $actual);
    }

}
