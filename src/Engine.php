<?php

namespace Php\Project45\Engine;

use function cli\prompt;
use function cli\line;

function games($gameRule, $generateRound)
{
    $correctAnswersCount = 0;

    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    echo "$gameRule\n";

    while ($correctAnswersCount < 3) {
        [$question, $correctAnswer] = $generateRound();
        echo "Question: $question\n";
        echo "Your answer: ";
        $userInput = trim(fgets(STDIN));

        if ((string) $correctAnswer === $userInput) {
            echo "Correct!\n";
            $correctAnswersCount++;
        } else {
            echo "'$userInput' is wrong answer ;(. Correct answer was '$correctAnswer'.\n Let's try again, $name!\n";
            return;
        }
    }
    if ($correctAnswersCount === 3) {
        echo "Congratulations, $name\n";
    }
}
