<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

/**
 * A scope covering all members of a chat.
 */
class BotCommandScopeChat extends BotCommandScope
{
    public const TYPE_NAME = 'botCommandScopeChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BotCommandScopeChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
