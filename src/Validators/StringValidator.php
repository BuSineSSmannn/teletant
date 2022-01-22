<?php


namespace JaysonDev\Teletant\Validators;


use JaysonDev\Teletant\Interfaces\ValidatorInterface;

class StringValidator implements ValidatorInterface
{
    use PatternValidator;

    public function __construct()
    {
        $this->pattern = '[\w\s]+';
    }

    /**
     * @return bool
     */
    public function spaces(): bool
    {
        return true;
    }
}