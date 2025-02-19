<?php

namespace Php\Project45\Games\Prime;

use Php\Project45\Engine;

function isPrime($number)
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

function playPrimeGame(): void
{
    $gameRule = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    $generateRound = function () {
        $number = rand(1, 100);
        $correctAnswer = isPrime($number) ? 'yes' : 'no';
        $question = "$number";

        return [$question, $correctAnswer];
    };

    Engine\game($gameRule, $generateRound);
}
