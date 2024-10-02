<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a list of chats similar to the given chat.
 */
class GetChatSimilarChats extends TdFunction
{
    public const TYPE_NAME = 'getChatSimilarChats';

    public function __construct(
        /**
         * Identifier of the target chat; must be an identifier of a channel chat.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetChatSimilarChats
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
