<?php

namespace Php\MyProject\Games\Gcd;

use Php\MyProject\Engine;

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }
    return $a;
}

function startGame(): void
{
    $gameRule = "Find the greatest common divisor of given numbers.";

    $generateRound = function () {
        $num1 = rand(10, 100);
        $num2 = rand(10, 100);
        $question = "$num1 $num2";
        $correctAnswer = gcd($num1, $num2);

        return [$question, "$correctAnswer"];
    };
    Engine\startRound($gameRule, $generateRound);
}
