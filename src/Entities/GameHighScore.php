<?php


namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class GameHighScore extends Entity
{
    public function position(): ?int
    {
        return parent::_data('position');
    }

    public function user(): User
    {
        return new User(parent::_data('user'));
    }

    public function score(): ?int
    {
        return parent::_data('score');
    }
}