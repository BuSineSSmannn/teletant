<?php

namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class Location extends Entity
{
    public function longitude(): ?float
    {
        return parent::_data('longitude');
    }

    public function latitude(): ?float
    {
        return parent::_data('latitude');
    }
}