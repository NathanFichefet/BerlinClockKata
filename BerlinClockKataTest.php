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

    public function test_convert_given5MinutesEquals5_ShouldReturnJXXXXXXXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClokTime("05");

        $this->assertEquals("JXXXXXXXXXX", $actual);
    }

    public function test_convert_given10MinutesAbove5_ShouldReturnJJXXXXXXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClokTime("10");

        $this->assertEquals("JJXXXXXXXXX", $actual);
    }

    public function test_convert_given15MinutesAbove5_ShouldReturnJJRXXXXXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClokTime("15");

        $this->assertEquals("JJRXXXXXXXX", $actual);
    }

    public function test_convert_given30MinutesAbove5_ShouldReturnJJRJJRXXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClokTime("30");

        $this->assertEquals("JJRJJRXXXXX", $actual);
    }

    public function test_convert_given45MinutesAbove5_ShouldReturnJJRJJRJJRXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClokTime("45");

        $this->assertEquals("JJRJJRJJRXX", $actual);
    }

    public function test_convert_given55MinutesAbove5_ShouldReturnJJRJJRJJRJJ(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClokTime("55");

        $this->assertEquals("JJRJJRJJRJJ", $actual);
    }

    public function test_convert_givenHourMod5Equals0_ShouldReturnXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClokTime("00");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_convert_givenHourMod5Equals1_ShouldReturnRXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClokTime("01");

        $this->assertEquals("RXXX", $actual);
    }

    public function test_convert_givenHourMod5Equals2_ShouldReturnRRXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClokTime("02");

        $this->assertEquals("RRXX", $actual);
    }

    public function test_convert_givenHourMod5Equals3_ShouldReturnRRRX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClokTime("03");

        $this->assertEquals("RRRX", $actual);
    }

    public function test_convert_givenHourMod5Equals4_ShouldReturnRRRR(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClokTime("04");

        $this->assertEquals("RRRR", $actual);
    }


}
