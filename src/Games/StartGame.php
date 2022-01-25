<?php

namespace Brain\Games\Games\StartGame;

use function Brain\Games\Cli\getUserName;
use function Brain\Games\Games\Engine\start;
use function Brain\Games\Games\CalculationsGameData\generateData as generateDataCalc;
use function Brain\Games\Games\EvenNumbersGameData\generateData as generateDataEven;
use function Brain\Games\Games\FindGCDGameData\generateData as generateDataGCD;
use function Brain\Games\Games\ProgressionGameData\generateData as generateDataProgression;
use function cli\line;

function startGame(string $game): bool
{
    $gameData = [];
    switch ($game) {
        case "Calculations":
            $gameData = generateDataCalc();
            break;
        case "EvenNumbers":
            $gameData = generateDataEven();
            break;
        case "FindGCD":
            $gameData = generateDataGCD();
            break;
        case "Progression":
            $gameData = generateDataProgression();
            break;
        default:
            return false;
    }

    $username = getUserName();
    $gameResult = start($gameData[0], $gameData[1], $gameData[2]);

    if ($gameResult) {
        line("Congratulations, {$username}!");
    } else {
        line("Let's try again, {$username}!");
    }

    return $gameResult;
}
