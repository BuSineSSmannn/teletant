<?php


namespace JaysonDev\Teletant\Addons;


use JaysonDev\Teletant\Context;

class Fast
{
    public static function answer($text, $keyboard = null)
    {
        return function (Context $ctx) use ($text, $keyboard) {
            $ctx->reply($text, $keyboard);
        };
    }
}