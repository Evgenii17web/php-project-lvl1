<?php

use function Brain\Games\Engine\startEngine;

function startPrime(): void
{
    $questionGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $arrayOfRandomNumbers = [];
    $arrayOfRightAnswers = [];

    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(5, 100);
        $arrayOfRandomNumbers[] = $randomNumber;
        $rightAnswer = '';

        for ($u = 2; $u <= $randomNumber / 2; $u++) {
            if ($randomNumber % $u == 0) {
                $rightAnswer = 'no';
                break;
            } else {
                $rightAnswer = 'yes';
            }
        }
        $arrayOfRightAnswers[] = $rightAnswer;
    }
    startEngine($questionGame, $arrayOfRandomNumbers, $arrayOfRightAnswers);
}
