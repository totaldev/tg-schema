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
    public const string TYPE_NAME = 'updateMessageSendFailed';

    public function __construct(
        /**
         * The cause of the message sending failure.
         */
        protected Error   $error,
        /**
         * The failed to send message.
         */
        protected Message $message,
        /**
         * The previous temporary message identifier.
         */
        protected int     $oldMessageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageSendFailed
    {
        return new static(
            error       : TdSchemaRegistry::fromArray($array['error']),
            message     : TdSchemaRegistry::fromArray($array['message']),
            oldMessageId: $array['old_message_id'],
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

    public function setError(Error $value): static
    {
        $this->error = $value;

        return $this;
    }

    public function setMessage(Message $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function setOldMessageId(int $value): static
    {
        $this->oldMessageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'error'          => $this->error->jsonSerialize(),
            'message'        => $this->message->jsonSerialize(),
            'old_message_id' => $this->oldMessageId,
        ];
    }
}
