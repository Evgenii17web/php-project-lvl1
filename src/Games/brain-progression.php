<?php

use function Brain\Games\Engine\startEngine;

function startProgression(): void
{
    $questionGame = 'What number is missing in the progression?';
    $arrayOfRandomNumbers = [];
    $arrayOfRightAnswers = [];

    for ($i = 0; $i < 3; $i++) {
        $lengthProgression = rand(5, 10);
        $arrayOfAllNumbers = [];

        $randomNum = rand(1, 5);
        for ($u = 10; $u <= 100; $u += $randomNum) {
            $arrayOfAllNumbers[] = $u;
        }

        $lengthOfArrayOfAllNumbers = count($arrayOfAllNumbers) - 10;
        $cutArray = array_slice($arrayOfAllNumbers, rand(1, $lengthOfArrayOfAllNumbers), $lengthProgression);
        $lengthOfCutArray = count($cutArray) - 1;
        $rightAnswer = $cutArray[rand(0, $lengthOfCutArray)];
        $rightAnswer = (string) $rightAnswer;
        $stringOfNumbers = implode(' ', $cutArray);
        $result = str_replace($rightAnswer, '..', $stringOfNumbers);

        $arrayOfRightAnswers[] = $rightAnswer;
        $arrayOfRandomNumbers[] = $result;
    }
    startEngine($questionGame, $arrayOfRandomNumbers, $arrayOfRightAnswers);
}
