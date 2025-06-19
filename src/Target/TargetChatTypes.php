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
    public const TYPE_NAME = 'targetChatTypes';

    public function __construct(
        /**
         * True, if private chats with ordinary users are allowed.
         */
        protected bool $allowUserChats,
        /**
         * True, if private chats with other bots are allowed.
         */
        protected bool $allowBotChats,
        /**
         * True, if basic group and supergroup chats are allowed.
         */
        protected bool $allowGroupChats,
        /**
         * True, if channel chats are allowed.
         */
        protected bool $allowChannelChats,
    ) {}

    public static function fromArray(array $array): TargetChatTypes
    {
        return new static(
            $array['allow_user_chats'],
            $array['allow_bot_chats'],
            $array['allow_group_chats'],
            $array['allow_channel_chats'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'allow_user_chats'    => $this->allowUserChats,
            'allow_bot_chats'     => $this->allowBotChats,
            'allow_group_chats'   => $this->allowGroupChats,
            'allow_channel_chats' => $this->allowChannelChats,
        ];
    }
}
