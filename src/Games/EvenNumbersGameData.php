<?php

namespace Brain\Games\Games\EvenNumbersGameData;

function generateData(): array
{
    $gameDesription = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answersToWin = 3;
    $questions = [];

    // generate answers and questions for game
    for ($i = 0; $i < $answersToWin; $i++) {
        do {
            $number = rand(1, 25);
        } while (in_array($number, array_keys($questions), true));

        $answer = $number % 2 == 0 ? 'yes' : 'no';
        $questions[$number] = $answer;
    }

    return [$gameDesription, $answersToWin, $questions];
}
