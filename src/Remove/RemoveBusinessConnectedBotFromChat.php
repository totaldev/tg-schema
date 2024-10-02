<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes the connected business bot from a specific chat by adding the chat to businessRecipients.excluded_chat_ids.
 */
class RemoveBusinessConnectedBotFromChat extends TdFunction
{
    public const TYPE_NAME = 'removeBusinessConnectedBotFromChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): RemoveBusinessConnectedBotFromChat
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
