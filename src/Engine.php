<?php

namespace Php\Project45\Engine;

use function cli\prompt;
use function cli\line;

const ROUNDS_COUNT = 3;
function game(string $gameRule, callable $generateRound): void
{

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameRule);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $correctAnswer] = $generateRound();
        line("Question: %s", $question);
        $userInput = prompt("Your answer");

        if ((string) $correctAnswer === $userInput) {
            line("Correct!");
        } else {
            line("\"%s\" is wrong answer ;(. Correct answer was \"%s\".", $userInput, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line("Congratulations, %s!", $name);
}
