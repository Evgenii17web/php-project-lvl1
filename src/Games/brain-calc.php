<?php

use Brain\Games\Engine;

function startBrainCalc(): int
{
    $question = 'What is the result of the expression?';
    $name = Engine\greetUser($question);
    $rightAnswer = '';

    for ($i = 0; $i < 3; $i++) {
        $firstNum = rand(1, 10);
        $secondNum = rand(1, 10);
        $mathematicalExpression = ['+', '-', '*'];
        $randomExpression = array_rand($mathematicalExpression);
        $rightAnswer = 0;

        switch ($mathematicalExpression[$randomExpression]) {
            case '+':
                $rightAnswer = $firstNum + $secondNum;
                break;
            case '-':
                $rightAnswer = $firstNum - $secondNum;
                break;
            case '*':
                $rightAnswer = $firstNum * $secondNum;
        }
        $rightAnswer = (string) $rightAnswer;
        $answer = Engine\askQuestion("{$firstNum} {$mathematicalExpression[$randomExpression]} {$secondNum}");

        $i = Engine\checkRightAnswer($answer, $rightAnswer, $i, $name);
    }
    $rightAnswer = (int) $rightAnswer;
    return $rightAnswer;
}
