<?php

namespace Brain\Games\Games\CalculationsGameData;

function generateData()
{
    $gameDesription = 'What is the result of the expression?';
    $answersToWin = 3;
    $questions = [];

    $mathOperations = ['*', '+', '-'];

    for ($i = 0; $i < $answersToWin; $i++) {
        $answer = '';
        $question = '';

        do {
            $operation = $mathOperations[array_rand($mathOperations)];
            $operandLeft = rand(1, 25);
            $operandRight = rand(1, 25);

            $question = "{$operandLeft} {$operation} {$operandRight}";

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
        } while (in_array($question, array_keys($questions)));

        $questions[$question] = $answer;
    }

    return [$gameDesription, $answersToWin, $questions];
}
