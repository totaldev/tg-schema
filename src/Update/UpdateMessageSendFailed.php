<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message failed to send. Be aware that some messages being sent can be irrecoverably deleted, in which case updateDeleteMessages will be received instead of this update
 */
class UpdateMessageSendFailed extends Update
{
    public const TYPE_NAME = 'updateMessageSendFailed';

    /**
     * The failed to send message
     *
     * @var Message
     */
    protected Message $message;

    /**
     * The previous temporary message identifier
     *
     * @var int
     */
    protected int $oldMessageId;

    /**
     * The cause of the message sending failure
     *
     * @var Error
     */
    protected Error $error;

    public function __construct(Message $message, int $oldMessageId, Error $error)
    {
        parent::__construct();

        $this->message = $message;
        $this->oldMessageId = $oldMessageId;
        $this->error = $error;
    }

    public static function fromArray(array $array): UpdateMessageSendFailed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            $array['old_message_id'],
            TdSchemaRegistry::fromArray($array['error']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
            'old_message_id' => $this->oldMessageId,
            'error' => $this->error->typeSerialize(),
        ];
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function getOldMessageId(): int
    {
        return $this->oldMessageId;
    }

    public function getError(): Error
    {
        return $this->error;
    }
}
