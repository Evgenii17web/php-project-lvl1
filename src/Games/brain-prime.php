<?php

use Brain\Games\Engine;

function startPrime(): string
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $name = Engine\greetUser($question);
    $rightAnswer = '';

    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 100);
        $rightAnswer = '';

        for ($u = 2; $u <= $randomNumber / 2; $u++) {
            if ($randomNumber % $u == 0) {
                $rightAnswer = 'no';
                break;
            } else {
                $rightAnswer = 'yes';
            }
        }

        $answer = Engine\askQuestion("$randomNumber");
        $i = Engine\checkRightAnswer($answer, $rightAnswer, $i, $name);
    }
    return $rightAnswer;
}
