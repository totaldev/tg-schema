<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message failed to send. Be aware that some messages being sent can be irrecoverably deleted, in which case updateDeleteMessages will be received instead
 * of this update.
 */
class UpdateMessageSendFailed extends Update
{
    public const TYPE_NAME = 'updateMessageSendFailed';

    public function __construct(
        /**
         * The failed to send message.
         */
        protected Message $message,
        /**
         * The previous temporary message identifier.
         */
        protected int     $oldMessageId,
        /**
         * The cause of the message sending failure.
         */
        protected Error   $error
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageSendFailed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            $array['old_message_id'],
            TdSchemaRegistry::fromArray($array['error']),
        );
    }

    public function getError(): Error
    {
        return $this->error;
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
            'error'          => $this->error->typeSerialize(),
        ];
    }
}
