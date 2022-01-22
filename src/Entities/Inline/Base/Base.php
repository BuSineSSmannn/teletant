<?php

namespace JaysonDev\Teletant\Entities\Inline\Base;

class Base
{
    protected $out;

    public function getAsObject()
    {
        return $this->out;
    }
}