<?php

namespace Brain\Games\Games\Engine;

use function cli\line;
use function cli\prompt;

function start(string $gameDescription, int $answersToWin, array $questionsAndAnswers): bool
{
    line($gameDescription);

    $questions = array_keys($questionsAndAnswers);
    $rightAnswers = 0;

    foreach ($questions as $question) {
        if ($rightAnswers === $answersToWin) {
            break;
        }

        line("Question: %s", $question);
        $userAnswer = prompt('Your answer');

        $answer = (string)$questionsAndAnswers[$question];

        if ($userAnswer === $answer) {
            line('Correct!');
            $rightAnswers++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            return false;
        }
    }

    return true;
}
