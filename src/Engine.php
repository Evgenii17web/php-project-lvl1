<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function greetUser(string $question): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    return $name;
}

function askQuestion(string $question): string
{
    $answer = prompt("Question: {$question}");
    line("Your answer: %s", $answer);
    return $answer;
}

function checkRightAnswer(string $answer, string $rightAnswer, int $i, string $name): int
{
    if ($answer == $rightAnswer) {
        line('Correct!');
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.\nLet's try again, {$name}!");
        $i = 3;
    }
    if ($i === 2) {
        line("Congratulations, {$name}!");
    }
    return $i;
}
