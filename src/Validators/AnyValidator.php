<?php


namespace JaysonDev\Teletant\Validators;


use JaysonDev\Teletant\Interfaces\ValidatorInterface;

class AnyValidator implements ValidatorInterface
{
    use PatternValidator;

    public function __construct()
    {
        $this->pattern = '(.*?)';
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'any';
    }

    /**
     * @return bool
     */
    public function spaces(): bool
    {
        return false;
    }
}