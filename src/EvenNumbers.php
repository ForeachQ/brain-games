<?php

namespace Brain\Games\EvenNumbers;

use function Brain\Games\GameLogic\startGame;

function guessIsNumberEven()
{
    $gameDesription = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answersToWin = 3;
    $questions = [];

    // generate answers and questions for game
    for ($i = 0; $i < $answersToWin; $i++) {
        $number = rand(1, 25);
        while (in_array($number, array_keys($questions))) {
            $number = rand(1, 25);
        }

        $answer = $number % 2 == 0 ? 'yes' : 'no';
        $questions[$number] = $answer;
    }

    startGame($gameDesription, $questions, $answersToWin);
}
