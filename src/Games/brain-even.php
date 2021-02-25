<?php

use function Brain\Games\Engine\startEngine;

function startBrainEven(): void
{
    $questionGame = 'Answer "yes" if the number is even, otherwise answer "no".';

    $arrayOfRandomNumbers = [];
    $arrayOfRandomAnswers = [];

    for ($u = 0; $u < 3; $u++) {
        $randomNumber = rand(1, 100);
        $arrayOfRandomNumbers[] = $randomNumber;

        switch ($randomNumber % 2) {
            case 0:
                $rightAnswer = 'yes';
                $arrayOfRandomAnswers[] = $rightAnswer;
                break;
            case 1:
                $rightAnswer = 'no';
                $arrayOfRandomAnswers[] = $rightAnswer;
        }
    }
    startEngine($questionGame, $arrayOfRandomNumbers, $arrayOfRandomAnswers);
}
