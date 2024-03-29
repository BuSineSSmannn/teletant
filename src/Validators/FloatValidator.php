<?php


namespace JaysonDev\Teletant\Validators;


use JaysonDev\Teletant\Interfaces\ValidatorInterface;

class FloatValidator implements ValidatorInterface
{
    use PatternValidator;

    public function __construct()
    {
        $this->pattern = '-?\d+(\.\d+)?';
    }

    public function value()
    {
        return (float) $this->value;
    }

    /**
     * @return bool
     */
    public function spaces(): bool
    {
        return false;
    }
}