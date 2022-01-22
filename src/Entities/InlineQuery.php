<?php

namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class InlineQuery extends Entity
{
    public function id(): ?string
    {
        return parent::_data('id');
    }

    public function from(): User
    {
        return new User(parent::_data('from'));
    }

    public function location(): Location
    {
        return new Location(parent::_data('location'));
    }

    public function query(): ?string
    {
        return parent::_data('query');
    }

    public function offset(): ?string
    {
        return parent::_data('offset');
    }
}