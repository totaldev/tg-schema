<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Describes a message sent in the chat.
 */
class ChatStatisticsObjectTypeMessage extends ChatStatisticsObjectType
{
    public const TYPE_NAME = 'chatStatisticsObjectTypeMessage';

    public function __construct(
        /**
         * Message identifier.
         */
        protected int $messageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatStatisticsObjectTypeMessage
    {
        return new static(
            $array['message_id'],
        );
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'message_id' => $this->messageId,
        ];
    }
}
