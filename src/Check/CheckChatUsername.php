<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether a username can be set for a chat.
 */
class CheckChatUsername extends TdFunction
{
    public const TYPE_NAME = 'checkChatUsername';

    public function __construct(
        /**
         * Chat identifier; must be identifier of a supergroup chat, or a channel chat, or a private chat with self, or 0 if the chat is being created.
         */
        protected int    $chatId,
        /**
         * Username to be checked.
         */
        protected string $username,
    ) {}

    public static function fromArray(array $array): CheckChatUsername
    {
        return new static(
            $array['chat_id'],
            $array['username'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'username' => $this->username,
        ];
    }
}
