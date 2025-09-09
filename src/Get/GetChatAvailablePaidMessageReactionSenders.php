<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of message sender identifiers, which can be used to send a paid reaction in a chat.
 */
class GetChatAvailablePaidMessageReactionSenders extends TdFunction
{
    public const TYPE_NAME = 'getChatAvailablePaidMessageReactionSenders';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetChatAvailablePaidMessageReactionSenders
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
