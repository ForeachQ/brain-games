<?php

namespace Brain\Games\Games\StartGame;

use function Brain\Games\Cli\getUserName;
use function Brain\Games\Games\DataProviders\CalculationsGameDataProvider\generateData as generateDataCalc;
use function Brain\Games\Games\DataProviders\EvenNumbersGameDataProvider\generateData as generateDataEven;
use function Brain\Games\Games\DataProviders\FindGCDGameDataProvider\generateData as generateDataGCD;
use function Brain\Games\Games\DataProviders\PrimeGameDataProvider\generateData as generateDataPrime;
use function Brain\Games\Games\DataProviders\ProgressionGameDataProvider\generateData as generateDataProgression;
use function Brain\Games\Games\Engine\start;
use function cli\line;

function startGame(string $game): bool
{
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
        case "Prime":
            $gameData = generateDataPrime();
            break;
        default:
            return false;
    }

    $username = getUserName();
    $gameResult = start($gameData[0], $gameData[1], $gameData[2]);

    if ($gameResult) {
        line("Congratulations, %s!", $username);
    } else {
        line("Let's try again, %s!", $username);
    }

    return $gameResult;
}
