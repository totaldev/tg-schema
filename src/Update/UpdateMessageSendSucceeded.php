<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message has been successfully sent.
 */
class UpdateMessageSendSucceeded extends Update
{
    public const TYPE_NAME = 'updateMessageSendSucceeded';

    public function __construct(
        /**
         * The sent message. Almost any field of the new message can be different from the corresponding field of the original message. For example, the field scheduling_state may change, making the message scheduled, or non-scheduled.
         */
        protected Message $message,
        /**
         * The previous temporary message identifier.
         */
        protected int     $oldMessageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageSendSucceeded
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            $array['old_message_id'],
        );
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function getOldMessageId(): int
    {
        return $this->oldMessageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'message'        => $this->message->typeSerialize(),
            'old_message_id' => $this->oldMessageId,
        ];
    }
}
