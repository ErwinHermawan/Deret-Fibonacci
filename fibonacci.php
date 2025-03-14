<?php

class Fibonacci {
    public static function generate($n) {
        $fibonacci = array();
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }
}


$result = Fibonacci::generate(10);

// hasil deret Fibonacci
echo "Deret Fibonacci: ";
foreach ($result as $num) {
    echo $num . " ";
}
?>
