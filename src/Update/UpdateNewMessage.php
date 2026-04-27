<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new message was received; can also be an outgoing message.
 */
class UpdateNewMessage extends Update
{
    public const string TYPE_NAME = 'updateNewMessage';

    public function __construct(
        /**
         * The new message.
         */
        protected Message $message
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewMessage
    {
        return new static(
            message: TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function setMessage(Message $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'message' => $this->message->jsonSerialize(),
        ];
    }
}
