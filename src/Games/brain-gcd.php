<?php

use Brain\Games\Engine;

function startGcd()
{
    $question = 'Find the greatest common divisor of given numbers.';
    $name = Engine\greetUser($question);
    $rightAnswer = '';

    for ($i = 0; $i < 3; $i++) {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);

        $answer = Engine\askQuestion("{$firstNum} {$secondNum}");

        while ($firstNum != $secondNum) {
            if ($firstNum > $secondNum) {
                $rightAnswer = $firstNum -= $secondNum;
            } else {
                $rightAnswer = $secondNum -= $firstNum;
            }
        }
        $i = Engine\checkRightAnswer($answer, $rightAnswer, $i, $name);
    }
    return $rightAnswer;
}
