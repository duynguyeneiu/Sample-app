<?php
class Operation
{
    public $operand1;
    public $operand2;
    public $operator;
    public $result;
    public function __construct($operand1, $operand2, $operator)
    {
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
        $this->operator = $operator;
        $this->result = 0;
    }
    public function calculate()
    {
        try {
            $operand1 = $this->operand1;
            $operand2 = $this->operand2;

            switch ($this->operator) {
                case '+':
                    $this->result = $operand1 + $operand2;
                    break;
                case '-':
                    $this->result = $operand1 - $operand2;
                    break;
                case '*':
                    $this->result = $operand1 * $operand2;
                    break;
                case '/':
                    if ($this->operand2 == 0) {
                        throw new Exception('Cannot devide by 0');
                    }
                    $this->result = $operand1 / $operand2;
                    break;
                default:
                    throw new Exception('Invalid operator');
            }
        } catch (Exception $e) {
            $this->result = $e->getMessage();
        }
    }
}
