<?php

namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class BotCommand extends Entity
{
    /**
     * @return string|null
     */
    public function command(): ?string
    {
        return parent::_data('command');
    }

    /**
     * @return string|null
     */
    public function description(): ?string
    {
        return parent::_data('description');
    }
}