<?php

use function Brain\Games\Engine\startEngine;

function startBrainCalc(): void
{
    $questionGame = 'What is the result of the expression?';
    $arrayOfRandomExpression = [];
    $arrayOfRightAnswers = [];

    for ($u = 0; $u < 3; $u++) {
        $firstNum = rand(1, 10);
        $secondNum = rand(1, 10);
        $mathematicalExpression = ['+', '-', '*'];
        $randomExpression = array_rand($mathematicalExpression);

        switch ($mathematicalExpression[$randomExpression]) {
            case '+':
                $rightAnswer = $firstNum + $secondNum;
                $arrayOfRightAnswers[] = $rightAnswer;
                break;
            case '-':
                $rightAnswer = $firstNum - $secondNum;
                $arrayOfRightAnswers[] = $rightAnswer;
                break;
            case '*':
                $rightAnswer = $firstNum * $secondNum;
                $arrayOfRightAnswers[] = $rightAnswer;
        }
        $arrayOfRandomExpression[] = "{$firstNum} {$mathematicalExpression[$randomExpression]} {$secondNum}";
    }
    startEngine($questionGame, $arrayOfRandomExpression, $arrayOfRightAnswers);
}
