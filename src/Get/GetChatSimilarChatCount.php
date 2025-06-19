<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns approximate number of chats similar to the given chat.
 */
class GetChatSimilarChatCount extends TdFunction
{
    public const TYPE_NAME = 'getChatSimilarChatCount';

    public function __construct(
        /**
         * Identifier of the target chat; must be an identifier of a channel chat.
         */
        protected int  $chatId,
        /**
         * Pass true to get the number of chats without sending network requests, or -1 if the number of chats is unknown locally.
         */
        protected bool $returnLocal
    ) {}

    public static function fromArray(array $array): GetChatSimilarChatCount
    {
        return new static(
            $array['chat_id'],
            $array['return_local'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getReturnLocal(): bool
    {
        return $this->returnLocal;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'return_local' => $this->returnLocal,
        ];
    }
}
