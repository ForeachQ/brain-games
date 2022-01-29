<?php

namespace Brain\Games\Games\DataProviders\PrimeGameDataProvider;

function generateData(): array
{
    $gameDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $answersToWin = 3;
    $questions = [];

    // generate answers and questions for game
    for ($i = 0; $i < $answersToWin; $i++) {
        do {
            $number = rand(1, 30);
        } while (in_array($number, array_keys($questions), true));

        $answer = isPrime($number) ? 'yes' : 'no';
        $questions[$number] = $answer;
    }

    return [$gameDescription, $answersToWin, $questions];
}

function isPrime(int $number): bool
{
    for ($i = 2, $end = floor(sqrt($number)); $i <= $end; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
