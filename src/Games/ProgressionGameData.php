<?php

namespace Brain\Games\Games\ProgressionGameData;

const PROGRESSION_LENGHT = 10;

function generateData(): array
{
    $gameDesription = 'What number is missing in the progression?';
    $answersToWin = 3;
    $questions = [];

    // generate answers and questions for game
    for ($i = 0; $i < $answersToWin; $i++) {
        do {
            $progression = [];
            $start = rand(1, 15);
            $step = rand(1, 6);

            $progression[] = $start;
            for ($j = 1; $j < PROGRESSION_LENGHT; $j++) {
                $progression[] = $start + ($j * $step);
            }

            $elementToHide = rand(0, count($progression) - 1);

            $answer = $progression[$elementToHide];
            $progression[$elementToHide] = '..';

            $question = implode(' ', $progression);
        } while (in_array($question, array_keys($questions)));

        $questions[$question] = $answer;
    }

    return [$gameDesription, $answersToWin, $questions];
}
