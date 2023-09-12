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

            if (($odd > 0) && ($even > 0)) {
                if ($odd > $even) echo nl2br("$arrayNum[$key] (the only odd number) \r\n");
                elseif ($odd < $even) echo nl2br("$arrayNum[$key] (the only even number) \r\n");
                else echo nl2br("false (all odd integer, no outlier \r\n)");
            }
        }
    }

    public static function findNeedle($array, $str) {
        foreach ($array as $key => $val) {
            if ($val == $str) {
                echo nl2br($key."\n");
            }
        }
    }

    public static function blueOcean($array1, $array2) {
        $arr1New = [];

        foreach ($array2 as $key2 => $value2) {
            foreach ($array1 as $key1 => $value1) {
                if ($value1 != $value2) {
                    $arr1New[] = $value1;
                }
            }
        }

        print_r($arr1New);
    }
}

SpeSkillTest::narcissistic(111);
SpeSkillTest::narcissistic(153);

SpeSkillTest::parityoutliner([2, 4, 0, 100, 4, 11, 2602, 36]);
SpeSkillTest::parityoutliner([160, 3, 1719, 19, 11, 13, -21]);
SpeSkillTest::parityoutliner([11, 13, 15, 19, 9, 13, -21]);

SpeSkillTest::findNeedle(["red", "blue", "yellow", "black", "grey"], "blue");

SpeSkillTest::blueOcean([1,5,5,5,5,3], [5]);
SpeSkillTest::blueOcean([1,2,3,4,6,10], [1]);