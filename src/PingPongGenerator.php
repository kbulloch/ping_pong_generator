<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            // take the input
            // turn it into an array
            //return the array

            $list_of_numbers = array();

            $i = 1;

            while ($i <= $input_number) {
                if( $i % 15 == 0 ) {
                    array_push($list_of_numbers, "ping-pong");
                }
                elseif( $i % 3 == 0 ) {
                    array_push($list_of_numbers, "ping");
                }
                elseif( $i % 5 == 0 ) {
                    array_push($list_of_numbers, "pong");
                }
                else {
                    array_push($list_of_numbers, $i);
                }
                ++$i;
            }

            return $list_of_numbers;

        }
    }

?>
