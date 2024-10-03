<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A message has been pinned.
 */
class MessagePinMessage extends MessageContent
{
    public const TYPE_NAME = 'messagePinMessage';

    public function __construct(
        /**
         * Identifier of the pinned message, can be an identifier of a deleted message or 0.
         */
        protected int $messageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePinMessage
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
