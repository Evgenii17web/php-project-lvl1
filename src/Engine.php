<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startEngine(string $questionOfGame, array $question, array $rightAnswer): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($questionOfGame);

    for ($i = 0; $i < 3; $i++) {
        $answer = prompt("Question: {$question[$i]}");
        line("Your answer: %s", $answer);

        if ($answer == $rightAnswer[$i]) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer[$i]}'.\nLet's try again, {$name}!");
            break;
        }
        if ($i === 2) {
            line("Congratulations, {$name}!");
        }
    }
}
