<?php

namespace Wau\DynamicComparator\Traits;

trait DynamicComparator
{
    /**
     * Mapping: operation to method.
     * @link https://www.php.net/manual/en/language.operators.comparison.php
     *
     * @var array
     */
    private $operatorToMethod = [
        '==' => 'equal',
        '===' => 'identical',
        '!=' => 'notEqual',
        '!==' => 'notIdentical',
        '>' => 'greaterThan',
        '<' => 'lessThan',
        '>=' => 'greaterThanOrEqualTo',
        '<=' => 'lessThanOrEqualTo',
    ];

    /**
     * Determines which method should be called.
     *
     * If method doesn't exist in mapping variable,
     * default method will be called.
     *
     * @param $value_a
     *  First operand.
     * @param $operation
     *  Operation for comparison.
     * @param $value_b
     *  Second operand.
     *
     * @return bool
     *  Result of comparison.
     */
    protected function is($value_a, $operation, $value_b): bool
    {
        if ($method = $this->operatorToMethod[$operation]) {
            return $this->$method($value_a, $value_b);
        }
        throw new \LogicException("Undefined operator for comparison.");
    }

    private function equal($value_a, $value_b)
    {
        return $value_a == $value_b;
    }

    private function identical($value_a, $value_b)
    {
        return $value_a === $value_b;
    }

    private function notEqual($value_a, $value_b)
    {
        return $value_a != $value_b;
    }

    private function notIdentical($value_a, $value_b)
    {
        return $value_a !== $value_b;
    }

    private function greaterThan($value_a, $value_b)
    {
        return $value_a > $value_b;
    }

    private function lessThan($value_a, $value_b)
    {
        return $value_a < $value_b;
    }

    private function greaterThanOrEqualTo($value_a, $value_b)
    {
        return $value_a >= $value_b;
    }

    private function lessThanOrEqualTo($value_a, $value_b)
    {
        return $value_a <= $value_b;
    }

}