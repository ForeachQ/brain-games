<?php

namespace Brain\Games\Games\DataProviders\FindGCDGameData;

function generateData(): array
{
    $gameDescription = 'Find the greatest common divisor of given numbers.';
    $answersToWin = 3;
    $questions = [];

    // generate answers and questions for game
    for ($i = 0; $i < $answersToWin; $i++) {
        do {
            $firstNumber = rand(1, 50);
            $secondNumber = rand(1, 50);

            $answer = getGCD($firstNumber, $secondNumber);
            $question = sprintf("%s %s", $firstNumber, $secondNumber);
        } while (in_array($question, array_keys($questions), true));

        $questions[$question] = $answer;
    }

    return [$gameDescription, $answersToWin, $questions];
}

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
