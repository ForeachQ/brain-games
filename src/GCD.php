<?php

namespace Brain\Games\GCD;

function getGCD(int $firstNumber, int $secondNumber): int
{
    $first = $firstNumber;
    $second = $secondNumber;

    while ($first !== $second) {
        if ($first > $second) {
            $first -= $second;
        } else {
            $second -= $first;
        }
    }

    return $first;
}
