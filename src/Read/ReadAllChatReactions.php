<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Read;

use Totaldev\TgSchema\TdFunction;

/**
 * Marks all reactions in a chat or a forum topic as read.
 */
class ReadAllChatReactions extends TdFunction
{
    public const TYPE_NAME = 'readAllChatReactions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): ReadAllChatReactions
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
