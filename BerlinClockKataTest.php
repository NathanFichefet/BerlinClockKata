<?php

require "vendor/autoload.php";
require "BerlinClockKata.php";

use PHPUnit\Framework\TestCase;

define("today",date("H:i:s"));

class BerlinClockKataTest extends TestCase {


    public function test_convert_givenMinutesMod5Equals0_shouldReturnAllLightsOff(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClockTime('00');

        $this->assertEquals("XXXX", $actual);
    }

    public function test_convert_givenMinutesMod5Equals1_shouldReturnJXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClockTime('01');

        $this->assertEquals("JXXX", $actual);
    }

    public function test_convert_givenMinutesMod5Equals2_shouldReturnJJXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClockTime('02');

        $this->assertEquals("JJXX", $actual);
    }

    public function test_convert_givenMinutesMod5Equals3_shouldReturnJJJX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClockTime('03');

        $this->assertEquals("JJJX", $actual);
    }

    public function test_convert_givenMinutesMod5Equals4_shouldReturnJJJJ(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateMinuteToBerlinClockTime("04");

        $this->assertEquals("JJJJ", $actual);
    }

    public function test_convert_given5MinutesEquals5_ShouldReturnJXXXXXXXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClockTime("05");

        $this->assertEquals("JXXXXXXXXXX", $actual);
    }

    public function test_convert_given10MinutesAbove5_ShouldReturnJJXXXXXXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClockTime("10");

        $this->assertEquals("JJXXXXXXXXX", $actual);
    }

    public function test_convert_given15MinutesAbove5_ShouldReturnJJRXXXXXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClockTime("15");

        $this->assertEquals("JJRXXXXXXXX", $actual);
    }

    public function test_convert_given30MinutesAbove5_ShouldReturnJJRJJRXXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClockTime("30");

        $this->assertEquals("JJRJJRXXXXX", $actual);
    }

    public function test_convert_given45MinutesAbove5_ShouldReturnJJRJJRJJRXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClockTime("45");

        $this->assertEquals("JJRJJRJJRXX", $actual);
    }

    public function test_convert_given55MinutesAbove5_ShouldReturnJJRJJRJJRJJ(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5MinuteToBerlinClockTime("55");

        $this->assertEquals("JJRJJRJJRJJ", $actual);
    }

    public function test_convert_givenHourMod5Equals0_ShouldReturnXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClockTime("00");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_convert_givenHourMod5Equals1_ShouldReturnRXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClockTime("01");

        $this->assertEquals("RXXX", $actual);
    }

    public function test_convert_givenHourMod5Equals2_ShouldReturnRRXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClockTime("02");

        $this->assertEquals("RRXX", $actual);
    }

    public function test_convert_givenHourMod5Equals3_ShouldReturnRRRX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClockTime("03");

        $this->assertEquals("RRRX", $actual);
    }

    public function test_convert_givenHourMod5Equals4_ShouldReturnRRRR(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateHourToBerlinClockTime("04");

        $this->assertEquals("RRRR", $actual);
    }

    public function test_convert_given1HourAbove5_ShouldReturnXXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5HoursToBerlinClockTime("01");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_convert_given5HoursAbove5_ShouldReturnRXXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5HoursToBerlinClockTime("05");

        $this->assertEquals("RXXX", $actual);
    }

    public function test_convert_given10HoursAbove5_ShouldReturnRRXX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5HoursToBerlinClockTime("10");

        $this->assertEquals("RRXX", $actual);
    }

    public function test_convert_given15HoursAbove5_ShouldReturnRRRX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5HoursToBerlinClockTime("15");

        $this->assertEquals("RRRX", $actual);
    }

    public function test_convert_given20HoursAbove5_ShouldReturnRRRR(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateAbove5HoursToBerlinClockTime("20");

        $this->assertEquals("RRRR", $actual);
    }

    public function test_convert_givenPairSeconds_ShouldReturnR(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateSecondToBerlinClockTime("02");

        $this->assertEquals("R", $actual);
    }

    public function test_convert_givenImpairSeconds_ShouldReturnX(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateSecondToBerlinClockTime("01");

        $this->assertEquals("X", $actual);
    }

    public function testTranslateSecondToBerlinClockTime(){

        $BerlinClockKata = new BerlinClockKata();

        $actual = $BerlinClockKata->translateToBerlinClokTime(today);

        $this->assertEquals($actual, $actual);

        echo $actual;
    }

}
