<?php

use Brain\Games\Engine;

function startPrime()
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $name = Engine\greetUser($question);

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
}
