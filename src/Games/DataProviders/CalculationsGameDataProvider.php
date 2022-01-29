<?php

namespace Brain\Games\Games\DataProviders\CalculationsGameDataProvider;

function generateData(): array
{
    $gameDescription = 'What is the result of the expression?';
    $answersToWin = 3;
    $questions = [];

    $mathOperations = ['*', '+', '-'];

    for ($i = 0; $i < $answersToWin; $i++) {
        $answer = '';

        do {
            $operation = $mathOperations[array_rand($mathOperations)];
            $operandLeft = rand(1, 25);
            $operandRight = rand(1, 25);

            $question = sprintf("%s %s %s", $operandLeft, $operation, $operandRight);

            switch ($operation) {
                case '*':
                    $answer = $operandLeft * $operandRight;
                    break;
                case '-':
                    $answer = $operandLeft - $operandRight;
                    break;
                case '+':
                    $answer = $operandLeft + $operandRight;
                    break;
            }
        } while (in_array($question, array_keys($questions), true));

        $questions[$question] = $answer;
    }

    return [$gameDescription, $answersToWin, $questions];
}
