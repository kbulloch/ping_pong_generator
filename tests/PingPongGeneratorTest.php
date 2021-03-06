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
            $input = 2;

            //Act
            $result = $test_generate_ping_pong_array->generatePingPongArray($input);

            //Assert
                //assert equal to an array of numbers
            $correct_array_of_numbers = array(1, 2);
            $this->assertEquals($correct_array_of_numbers, $result);
        }


        function testPingAtThree()
        {
            //Arrange
            $test_ping_at_three = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_ping_at_three->generatePingPongArray($input);

            //Assert
            $ping_at_three_array = array(1, 2, "ping");
            $this->assertEquals($ping_at_three_array, $result);
        }

        function testPingAndPong()
        {
            //Arrange
            $test_pong_at_five = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_pong_at_five->generatePingPongArray($input);

            //Assert
            $pong_at_five_array = array(1, 2, "ping", 4, "pong");
            $this->assertEquals($pong_at_five_array, $result);
        }

        function testPingPong()
        {
            //Arrange
            $test_ping_and_pong = new PingPongGenerator;
            $input = 15;

            //Act
            $result = $test_ping_and_pong->generatePingPongArray($input);

            //Assert
            $ping_and_pong_array = array(1, 2, 'ping', 4, 'pong', 'ping', 7, 8, 'ping', 'pong', 11, 'ping', 13, 14, 'ping-pong');
            $this->assertEquals($ping_and_pong_array, $result);
        }

    }
?>
