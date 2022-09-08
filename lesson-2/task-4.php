<?php
for ($i = 1; $i <= 100; $i++) {
    switch (true) {
        case ($i % 3 === 0 && $i % 5 === 0): // $i % 3 вот эти условия повторяются дважды, в идеале по одному разу проверить
            $output = "FizzBuzz";
            break;
        case $i % 3 === 0:
            // $output = $i % 5 === 0 ? "FizzBuzz" : "Fizz"; наверное так лучше было
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

/*сделал вариант, когда операция деления не повторяется
//for ($i = 1; $i <= 100; $i++) {
//    $fizz = $i % 3 === 0;
//    $buzz = $i % 5 === 0;
//
//    switch (true) {
//        case $fizz && $buzz:
//            $output = 'FizzBuzz';
//            break;
//        case $fizz:
//            $output = 'Fizz';
//            break;
//        case $buzz:
//            $output = 'Buzz';
//            break;
//        default:
//            $output = $i;
//    }
//    echo "$output\n";
//}
