<?php

namespace Php\Project45\Engine;

use function cli\prompt;
use function cli\line;

function games(string $gameRule, callable $generateRound)
{
    $correctAnswersCount = 0;

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    echo "$gameRule\n";

    while ($correctAnswersCount < 3) {
        [$question, $correctAnswer] = $generateRound();
        echo "Question: $question\n";
        echo "Your answer: ";
        $input = fgets(STDIN);
        $userInput = trim($input !== false ? $input : '');

        if ((string) $correctAnswer === $userInput) {
            echo "Correct!\n";
            $correctAnswersCount++;
        } else {
            echo "\"$userInput\" is wrong answer ;(. Correct answer was \"$correctAnswer\".\nLet's try again, $name!\n";
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
