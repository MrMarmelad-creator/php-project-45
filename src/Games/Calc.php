<?php

namespace Php\Project45\Games\Calc;

use Php\Project45\Engine;

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

    Engine\game($gameRule, $generateRound);
}
