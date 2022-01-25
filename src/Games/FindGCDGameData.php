<?php

namespace Brain\Games\Games\FindGCDGameData;

use function Brain\Games\GCD\getGCD;

function generateData(): array
{
    $gameDesription = 'Find the greatest common divisor of given numbers.';
    $answersToWin = 3;
    $questions = [];

    // generate answers and questions for game
    for ($i = 0; $i < $answersToWin; $i++) {
        do {
            $firstNumber = rand(1, 50);
            $secondNumber = rand(1, 50);

            $answer = getGCD($firstNumber, $secondNumber);
            $question = "{$firstNumber} {$secondNumber}";
        } while (in_array($question, array_keys($questions), true));

        $questions[$question] = $answer;
    }

    return [$gameDesription, $answersToWin, $questions];
}
