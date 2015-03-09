<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function testGeneratePingPongArray()
        {
            //Arrange
                //declare new object
                //declate input
            $test_generate_ping_pong_array = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_generate_ping_pong_array->generatePingPongArray($input);

            //Assert
                //assert equal to an array of numbers
            $correct_array_of_numbers = array(1, 2, 3, 4, 5);
            $this->assertEquals($correct_array_of_numbers, $result);
        }

        function testPingAtThree()
        {
            //Arrange
            $test_ping_at_three = new PingPongGenerator;
            $input = 6;
            //Act
            $result = $test_ping_at_three->generatePingPongArray($input);
            //Assert
            $ping_at_three_array = array(1, 2, 'ping', 4, 5, 'ping');
            $this->assertEquals($ping_at_three_array, $result);
        }
    }
?>
