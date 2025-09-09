<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

/**
 * A paid reaction on behalf of an owned chat.
 */
class PaidReactionTypeChat extends PaidReactionType
{
    public const TYPE_NAME = 'paidReactionTypeChat';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaidReactionTypeChat
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
