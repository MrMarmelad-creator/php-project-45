<?php

namespace Php\Project45\Cli;

use function cli\prompt;
use function cli\line;

function welcome()
{
    line('Welcome to the Brain Game!');

    $name = prompt('May I have your name?');

    line("Hello, %s!", $name);
}
