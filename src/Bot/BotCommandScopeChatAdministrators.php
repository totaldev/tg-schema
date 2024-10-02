<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

/**
 * A scope covering all administrators of a chat.
 */
class BotCommandScopeChatAdministrators extends BotCommandScope
{
    public const TYPE_NAME = 'botCommandScopeChatAdministrators';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BotCommandScopeChatAdministrators
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
