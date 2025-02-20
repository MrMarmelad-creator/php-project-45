<?php

namespace Php\MyProject\Games\Calc;

use Php\MyProject\Engine;

function startGame(): void
{
    $gameRule = "What is the result of the expression?";

    $generateRound = function (): array {
        $operators = ['+', '-', '*'];
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $operator = $operators[array_rand($operators)];
        $question = "$num1 $operator $num2";

        $correctAnswer = match ($operator) {
            '+' => $num1 + $num2,
            '-' => $num1 - $num2,
            '*' => $num1 * $num2,
        };

        return [$question, "$correctAnswer"];
    };

    Engine\startRound($gameRule, $generateRound);
}
