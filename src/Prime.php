<?php

namespace Brain\Games\Prime;

function isPrime(int $number): bool
{
    for ($i = 2, $end = floor(sqrt($number)); $i <= $end; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
