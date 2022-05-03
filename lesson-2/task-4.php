<?php
for ($i = 1; $i <= 100; $i++) {
    switch (true) {
        case ($i % 3 === 0 && $i % 5 === 0):
            $output = "FizzBuzz";
            break;
        case $i % 3 === 0:
            $output = "Fizz";
            break;
        case $i % 5 === 0:
            $output = "Buzz";
            break;
        default:
            $output = $i;
    }
    echo "$output\n";
}
