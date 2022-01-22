<?php

namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class EncryptedCredentials extends Entity
{
    public function data(): ?string
    {
        return parent::_data('data');
    }

    public function hash(): ?string
    {
        return parent::_data('hash');
    }

    public function secret(): ?string
    {
        return parent::_data('secret');
    }
}