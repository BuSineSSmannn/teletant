<?php

namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class BotCommands extends Entity
{
    /**
     * @return BotCommand[]
     */
    public function each()
    {
        $messages = [];
        if (is_array($this->_data())) {
            foreach ($this->_data() as $message) {
                $messages[] = new BotCommand($message);
            }
            return $messages;
        } else return [];
    }
}