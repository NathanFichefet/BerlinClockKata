<?php

require "vendor/autoload.php";
require "BerlinClockKata.php";

use PHPUnit\Framework\TestCase;

define("today",date("H:i:s"));

class BerlinClockKataTest extends TestCase
{

    public function test_convert_givenMinutesMod5Equals0_shouldReturnAllLightsOff(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateToBerlinClokTime('00:00:00');

        $this->assertEquals("XXXX", $actual);
    }

    public function test_convert_givenMinutesMod5Equals1_shouldReturnJXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateToBerlinClokTime('00:01:00');

        $this->assertEquals("JXXX", $actual);
    }

}
