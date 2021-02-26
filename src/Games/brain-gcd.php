<?php

use function Brain\Games\Engine\startEngine;

function startGcd(): void
{
    $questionGame = 'Find the greatest common divisor of given numbers.';
    $arrayOfRandomNumbers = [];
    $arrayOfRightAnswers = [];

    for ($u = 0; $u < 3; $u++) {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        $arrayOfRandomNumbers[] = "{$firstNum} {$secondNum}";
        $rightAnswer = '';

        if ($firstNum != $secondNum) {
            while ($firstNum != $secondNum) {
                if ($firstNum > $secondNum) {
                    $rightAnswer = $firstNum -= $secondNum;
                } else {
                    $rightAnswer = $secondNum -= $firstNum;
                }
            }
            $arrayOfRightAnswers[] = $rightAnswer;
        } else {
            $arrayOfRightAnswers[] = $firstNum;
        }
    }
    startEngine($questionGame, $arrayOfRandomNumbers, $arrayOfRightAnswers);
}
