<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a message from a business account as received by a bot.
 */
class BusinessMessage extends TdObject
{
    public const TYPE_NAME = 'businessMessage';

    public function __construct(
        /**
         * The message.
         */
        protected Message  $message,
        /**
         * Message that is replied by the message in the same chat; may be null if none.
         */
        protected ?Message $replyToMessage,
    ) {}

    public static function fromArray(array $array): BusinessMessage
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            isset($array['reply_to_message']) ? TdSchemaRegistry::fromArray($array['reply_to_message']) : null,
        );
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function getReplyToMessage(): ?Message
    {
        return $this->replyToMessage;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'message'          => $this->message->typeSerialize(),
            'reply_to_message' => (isset($this->replyToMessage) ? $this->replyToMessage : null),
        ];
    }
}
