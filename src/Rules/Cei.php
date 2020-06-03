<?php


namespace Crawly\CeiLaravel\Rules;

class Cei
{
    public function validate(string $value): bool
    {
        $cei = preg_replace('/[^\d]/', '', $value);

        if (strlen($cei) != 12 || $cei == '000000000000') {
            return false;
        }

        $numbers     = str_split($cei);
        $dv1         = array_pop($numbers);
        $multipliers = [7, 4, 1, 8, 5, 2, 1, 6, 3, 7, 4];
        for ($i = 0; $i < 11; $i++) {
            $numbers[$i] = $numbers[$i] * $multipliers[$i];
        }
        $sum = array_sum($numbers);
        $dv2 = abs(10 - ($sum % 10 + $sum / 10)) % 10;

        return $dv2 == $dv1;
    }
}
