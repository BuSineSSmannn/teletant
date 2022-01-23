<?php

namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class ChatMemberUpdated extends Entity
{


    public function from(): User
    {
        return new User(parent::_data('from'));
    }

    public function date(): ?int
    {
        return parent::_data('date');
    }

    public function chat(): Chat
    {
        return new Chat(parent::_data('chat'));
    }

    /**
     * @return string|null
     */
    public function inviteLink(): ?string
    {
        return parent::_data('invite_link');
    }

    public function oldChatMember(): ChatMember
    {
        return new ChatMember(parent::_data('old_chat_member'));
    }

    public function newChatMember(): ChatMember
    {
        return new ChatMember(parent::_data('new_chat_member'));
    }
}