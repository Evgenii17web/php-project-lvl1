<?php

use Brain\Games\Engine;

function startGcd(): string
{
    $question = 'Find the greatest common divisor of given numbers.';
    $name = Engine\greetUser($question);
    $rightAnswer = '';

    for ($i = 0; $i < 3; $i++) {
        $firstNum = rand(1, 5);
        $secondNum = rand(1, 5);

        $answer = Engine\askQuestion("{$firstNum} {$secondNum}");

        if ($firstNum != $secondNum) {
            while ($firstNum != $secondNum) {
                if ($firstNum > $secondNum) {
                    $rightAnswer = $firstNum -= $secondNum;
                } else {
                    $rightAnswer = $secondNum -= $firstNum;
                }
            }
        } else {
            $rightAnswer = $firstNum;
        }
        $i = Engine\checkRightAnswer($answer, $rightAnswer, $i, $name);
    }
    return $rightAnswer;
}
