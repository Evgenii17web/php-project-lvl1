<?php

use function Brain\Games\Engine\startEngine;

function startBrainEven(): void
{
    $questionGame = 'Answer "yes" if the number is even, otherwise answer "no".';
    $arrayOfRandomNumbers = [];
    $arrayOfRightAnswers = [];

    for ($u = 0; $u < 3; $u++) {
        $randomNumber = rand(1, 100);
        $arrayOfRandomNumbers[] = $randomNumber;

        switch ($randomNumber % 2) {
            case 0:
                $rightAnswer = 'yes';
                $arrayOfRightAnswers[] = $rightAnswer;
                break;
            case 1:
                $rightAnswer = 'no';
                $arrayOfRightAnswers[] = $rightAnswer;
        }
    }
    startEngine($questionGame, $arrayOfRandomNumbers, $arrayOfRightAnswers);
}
