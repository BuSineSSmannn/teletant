<?php

namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class ShippingQuery extends Entity
{
    public function id(): ?string
    {
        return parent::_data('id');
    }

    public function from(): User
    {
        return new User(parent::_data('from'));
    }

    public function invoicePayload(): ?string
    {
        return parent::_data('invoice_payload');
    }

    public function shippingAddress(): ShippingAddress
    {
        return new ShippingAddress(parent::_data('shipping_address'));
    }
}