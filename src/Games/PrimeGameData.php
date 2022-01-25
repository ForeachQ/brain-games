<?php

namespace Brain\Games\Games\PrimeGameData;

use function Brain\Games\Prime\isPrime;

function generateData(): array
{
    $gameDesription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
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

    return [$gameDesription, $answersToWin, $questions];
}
