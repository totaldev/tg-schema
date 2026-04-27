<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Target;

use Totaldev\TgSchema\TdObject;

/**
 * Describes allowed types for the target chat.
 */
class TargetChatTypes extends TdObject
{
    public const string TYPE_NAME = 'targetChatTypes';

    public function __construct(
        /**
         * True, if private chats with other bots are allowed.
         */
        protected bool $allowBotChats,
        /**
         * True, if channel chats are allowed.
         */
        protected bool $allowChannelChats,
        /**
         * True, if basic group and supergroup chats are allowed.
         */
        protected bool $allowGroupChats,
        /**
         * True, if private chats with ordinary users are allowed.
         */
        protected bool $allowUserChats,
    ) {}

    public static function fromArray(array $array): TargetChatTypes
    {
        return new static(
            allowBotChats    : $array['allow_bot_chats'],
            allowChannelChats: $array['allow_channel_chats'],
            allowGroupChats  : $array['allow_group_chats'],
            allowUserChats   : $array['allow_user_chats'],
        );
    }

    public function getAllowBotChats(): bool
    {
        return $this->allowBotChats;
    }

    public function getAllowChannelChats(): bool
    {
        return $this->allowChannelChats;
    }

    public function getAllowGroupChats(): bool
    {
        return $this->allowGroupChats;
    }

    public function getAllowUserChats(): bool
    {
        return $this->allowUserChats;
    }

    public function setAllowBotChats(bool $value): static
    {
        $this->allowBotChats = $value;

        return $this;
    }

    public function setAllowChannelChats(bool $value): static
    {
        $this->allowChannelChats = $value;

        return $this;
    }

    public function setAllowGroupChats(bool $value): static
    {
        $this->allowGroupChats = $value;

        return $this;
    }

    public function setAllowUserChats(bool $value): static
    {
        $this->allowUserChats = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'allow_bot_chats'     => $this->allowBotChats,
            'allow_channel_chats' => $this->allowChannelChats,
            'allow_group_chats'   => $this->allowGroupChats,
            'allow_user_chats'    => $this->allowUserChats,
        ];
    }
}
