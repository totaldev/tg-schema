<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A poll in a message was stopped.
 */
class ChatEventPollStopped extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventPollStopped';

    public function __construct(
        /**
         * The message with the poll.
         */
        protected Message $message
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventPollStopped
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
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
            'message' => $this->message->typeSerialize(),
        ];
    }
}
