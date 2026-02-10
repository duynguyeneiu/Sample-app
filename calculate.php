<?php
$result ??= 0;

$operand1 = $_POST['operand1'] ?? null;
$operand2 = $_POST['operand2'] ?? null;
$operator = $_POST['operator'] ?? '+';

try {
    switch ($operator) {
        case '+':
            $result = $operand1 + $operand2;
            break;
        case '-':
            $result = $operand1 - $operand2;
            break;
        case '*':
            $result = $operand1 * $operand2;
            break;
        case '/':
            if ($operand2 == 0) {
                throw new Exception('Cannot devide by 0');
            }
            $result = $operand1 / $operand2;
            break;
        default:
            throw new Exception('Invalid operator');
    }
} catch (Exception $e) {
    $result = $e->getMessage();
}


include 'index.php';