<?php

namespace Php\Project45\Games\Progression;

use Php\Project45\Engine;

function startProgression(int $length, int $start, int $step): array
{
    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}
function startGame(): void
{
    $gameRule = "What number is missing in the progression?";

    $generateRound = function () {
        $length = rand(5, 10);
        $start = rand(1, 50);
        $step = rand(2, 10);
        $progression = startProgression($length, $start, $step);

        $hideInd = rand(0, $length - 1);
        $correctAnswer = $progression[$hideInd];
        $progression[$hideInd] = "..";

        $question = implode(" ", $progression);
        return [$question, "$correctAnswer"];
    };
    Engine\startRound($gameRule, $generateRound);
}
