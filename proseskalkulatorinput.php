<?php
include 'calculatorFunctions.php';

function processCalculatorInput()
{
    if(!$_SERVER['REQUEST_METHOD'] == 'POST') return;
    if (!isset($_POST['button'])) return;

    $button     = $_POST['button'];
    $expression = isset($_POST['display']) ? $_POST['display'] : '';

    if ($button === '=') {
        $expression = evaluateExpression($expression);
    } elseif ($button === 'C') {
        $expression = clearExpression();
    } else {
        $expression = appendToExpression($expression, $button);
    }

    redirectToIndex($expression);
}

// Panggil fungsi untuk memproses input kalkulator
processCalculatorInput();

function evaluateExpression($expression)

{
    $result = @eval ("return $expression;");
    if ($result !== false) {
        return $result;
    } else {
        return 'Error';
    }
}

function clearExpression()
{
    return '';
}

function appendToExpression($expression, $button)
{
    return $expression . $button;
}

function redirectToIndex($expression)
{
    header("Location: index3.php?display=" . urlencode($expression));
    exit();
}

?>