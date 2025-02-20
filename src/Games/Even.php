<?php

namespace Php\MyProject\Games\Even;

use Php\MyProject\Engine;

function startGame(): void
{
    $gameRule = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $generateRound = function (): array {
        $number = rand(1, 100);
        $correctAnswer = ($number % 2 === 0) ? 'yes' : 'no';
        return [$number, "$correctAnswer"];
    };

    Engine\startRound($gameRule, $generateRound);
}
