<?php

namespace Php\MyProject\Games\Prime;

use Php\MyProject\Engine;

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function startGame(): void
{
    $gameRule = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    $generateRound = function () {
        $number = rand(1, 100);
        $correctAnswer = isPrime($number) ? 'yes' : 'no';
        $question = "$number";

        return [$question, "$correctAnswer"];
    };

    Engine\startRound($gameRule, $generateRound);
}
