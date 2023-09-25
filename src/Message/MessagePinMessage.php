<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message has been pinned
 */
class MessagePinMessage extends MessageContent
{
    public const TYPE_NAME = 'messagePinMessage';

    /**
     * Identifier of the pinned message, can be an identifier of a deleted message or 0
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $messageId)
    {
        parent::__construct();

        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): MessagePinMessage
    {
        return new static(
            $array['message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_id' => $this->messageId,
        ];
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
