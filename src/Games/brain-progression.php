<?php

use Brain\Games\Engine;

function startProgression()
{
    $question = 'What number is missing in the progression?';
    $name = Engine\greetUser($question);

    for ($i = 0; $i < 3; $i++) {
        $lengthProgression = rand(5, 10);
        $arrayOfAllNumbers = [];

        $randomNum = rand(1, 5);
        for ($u = 1; $u <= 100; $u += $randomNum) {
            $arrayOfAllNumbers[] = $u;
        }

        $lengthOfArrayOfAllNumbers = count($arrayOfAllNumbers) - 10;
        $cutArray = array_slice($arrayOfAllNumbers, rand(1, $lengthOfArrayOfAllNumbers), $lengthProgression);
        $lengthOfCutArray = count($cutArray) - 1;
        $rightAnswer = $cutArray[rand(0, $lengthOfCutArray)];
        $stringOfNumbers = implode(' ', $cutArray);
        $result = str_replace($rightAnswer, '..', $stringOfNumbers);

        $answer = Engine\askQuestion($result);

        $i = Engine\checkRightAnswer($answer, $rightAnswer, $i, $name);
    }
}
