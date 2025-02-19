<?php

namespace Php\Project45\Games\Even;

use Php\Project45\Engine;

function isEven(): void
{
    $gameRule = "Answer 'yes' if the number is even, otherwise answer 'no'.";

    $generateRound = function (): array {
        $number = rand(1, 100);
        $correctAnswer = ($number % 2 === 0) ? 'yes' : 'no';
        return [$number, $correctAnswer];
    };

    Engine\game($gameRule, $generateRound);
}
