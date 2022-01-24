<?php

namespace Brain\Games\EvenNumbers;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\getUserName;

function guessIsNumberEven()
{
    $username = getUserName();
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $guessedWords = 0;
    while ($guessedWords < 3) {
        $number = rand(1, 20);

        line("Question: %d", $number);
        $answer = prompt('Your answer');

        $trueAnswer = $number % 2 == 0 ? 'yes' : 'no';

        if ($trueAnswer === $answer) {
            line('Correct!');
            $guessedWords++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$trueAnswer}'.");
            line("Let's try again, {$username}!");
            return;
        }
    }

    line("Congratulations, {$username}!");
}
