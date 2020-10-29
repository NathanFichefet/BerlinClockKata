<?php

require "vendor/autoload.php";
require "BerlinClockKata.php";

use PHPUnit\Framework\TestCase;

define("today",date("H:i:s"));

class BerlinClockKataTest extends TestCase
{

    public function test_convert_given0Hour0Minute0Second_shouldReturnAllLightsOff(){
        //Arrange
        $BerlinClockKata = new BerlinClockKata();
        //Act
        $actual = $BerlinClockKata->translateToBerlinClokTime(today);
        //Assert
        $this->assertEquals("XXXX", $actual);
    }


}
