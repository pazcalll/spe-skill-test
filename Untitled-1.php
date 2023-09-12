<?php

class SpeSkillTest{
    public static function narcissistic($num) {
        $numStr = strval($num);
        $digits = strlen($numStr);

        $total = 0;
        for ($i=0; $i < $digits; $i++) {
            $subTotal = pow(intval($numStr[$i]), $i+1);
            $total += $subTotal;
        }

        if ($num == $total) echo nl2br("true \r\n");
        else echo nl2br("false \r\n");
    }

    public static function parityoutliner($arrayNum) {
        $odd = 0;
        $even = 0;

        $oddKey = [];
        $evenKey = [];

        foreach ($arrayNum as $key => $num) {
            if ($num % 2 == 0) {
                $even += 1;
                $evenKey[] = $key;
            }
            else {
                $odd += 1;
                $oddKey[] = $key;
            }
        }

        $odd =$odd-1;
        $even =$even-1;

        if ($odd > $even) echo nl2br("$oddKey[$odd] (the only odd number) \r\n");
        elseif ($odd < $even) echo nl2br("$evenKey[$even] (the only even number) \r\n");
        else echo nl2br("false (all odd integer, no outlier \r\n)");
    }

}

SpeSkillTest::narcissistic(111);
SpeSkillTest::narcissistic(153);

SpeSkillTest::parityoutliner([2, 4, 0, 100, 4, 11, 2602, 36]);
SpeSkillTest::parityoutliner([160, 3, 1719, 19, 11, 13, -21]);
SpeSkillTest::parityoutliner([11, 13, 15, 19, 9, 13, -21]);