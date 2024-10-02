<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a message to be replied in the same chat and forum topic.
 */
class InputMessageReplyToMessage extends InputMessageReplyTo
{
    public const TYPE_NAME = 'inputMessageReplyToMessage';

    public function __construct(
        /**
         * The identifier of the message to be replied in the same chat and forum topic. A message can be replied in the same chat and forum topic only if messageProperties.can_be_replied.
         */
        protected int            $messageId,
        /**
         * Quote from the message to be replied; pass null if none. Must always be null for replies in secret chats.
         */
        protected InputTextQuote $quote,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageReplyToMessage
    {
        return new static(
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['quote']),
        );
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getQuote(): InputTextQuote
    {
        return $this->quote;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'message_id' => $this->messageId,
            'quote'      => $this->quote->typeSerialize(),
        ];
    }
}
