<?php

use Brain\Games\Engine;

function startPrime(): string
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $name = Engine\greetUser($question);
    $rightAnswer = '';

    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 11);
        $rightAnswer = '';

        if ($randomNumber === 1 || $randomNumber === 2 || $randomNumber === 3 ||  $randomNumber === 5) {
            $rightAnswer = 'yes';
        }

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
