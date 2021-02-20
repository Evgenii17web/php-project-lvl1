<?php

use Brain\Games\Engine;

function startBrainEven()
{
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';
    $name = Engine\greetUser($question);

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $rightAnswer = '';

        switch ($number % 2) {
            case 0:
                $rightAnswer = 'yes';
                break;
            case 1:
                $rightAnswer = 'no';
        }

        $answer = Engine\askQuestion($number);

        $i = Engine\checkRightAnswer($answer, $rightAnswer, $i, $name);
    }
}
