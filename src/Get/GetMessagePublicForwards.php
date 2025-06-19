<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns forwarded copies of a channel message to different public channels and public reposts as a story. Can be used only if
 * messageProperties.can_get_statistics == true. For optimal performance, the number of returned messages and stories is chosen by TDLib.
 */
class GetMessagePublicForwards extends TdFunction
{
    public const TYPE_NAME = 'getMessagePublicForwards';

    public function __construct(
        /**
         * Chat identifier of the message.
         */
        protected int    $chatId,
        /**
         * Message identifier.
         */
        protected int    $messageId,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of messages and stories to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit
    ) {}

    public static function fromArray(array $array): GetMessagePublicForwards
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'offset'     => $this->offset,
            'limit'      => $this->limit,
        ];
    }
}
