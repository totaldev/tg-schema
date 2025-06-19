<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about actual author of a message sent on behalf of a channel. The method can be called if messageProperties.can_get_author == true.
 */
class GetMessageAuthor extends TdFunction
{
    public const TYPE_NAME = 'getMessageAuthor';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Identifier of the message.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): GetMessageAuthor
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
