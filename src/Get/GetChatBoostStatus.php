<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the current boost status for a supergroup or a channel chat.
 */
class GetChatBoostStatus extends TdFunction
{
    public const TYPE_NAME = 'getChatBoostStatus';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetChatBoostStatus
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
