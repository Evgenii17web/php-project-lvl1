<?php

use Brain\Games\Engine;

function startBrainEven() : string
{
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';
    $name = Engine\greetUser($question);
    $rightAnswer = '';

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);

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
    return $rightAnswer;
}
