<?php


namespace JaysonDev\Teletant\Validators;


use JaysonDev\Teletant\Interfaces\ValidatorInterface;

class WordValidator implements ValidatorInterface
{
    use PatternValidator;

    public function __construct()
    {
        $this->pattern = '[\w]+';
    }

    /**
     * @return bool
     */
    public function spaces(): bool
    {
        return false;
    }
}