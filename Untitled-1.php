<?php

class SpeSkillTest{
    public static function narcissistic(int $num) {
        $numStr = strval($num);
        $digits = strlen(strval($num));

        $total = 0;
        for ($i=0; $i < $digits; $i++) {
            $subTotal = pow(intval($numStr[$i]), $i+1);
            $total += $subTotal;
        }
        return $total;
    }
}

echo SpeSkillTest::narcissistic(153);