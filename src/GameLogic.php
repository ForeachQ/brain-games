<?php

namespace Brain\Games\GameLogic;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\getUserName;

function startGame(string $gameDescription, array $questionsAndAnswers, int $answersForWinning): bool
{
    $username = getUserName();
    line($gameDescription);

    $questions = array_keys($questionsAndAnswers);
    $rightAnswers = 0;

    foreach($questions as $question) {
        if ($rightAnswers === $answersForWinning) {
            break;
        }

        line("Question: %d", $question);
        $userAnswer = prompt('Your answer');

        $answer = $questionsAndAnswers[$question];

        if ($userAnswer === $answer) {
            line('Correct!');
            $rightAnswers++;
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, {$username}!");
            return false;
        }
        
    }

    line("Congratulations, {$username}!");
    return true;
}