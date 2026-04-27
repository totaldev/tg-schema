<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A group call message failed to send.
 */
class UpdateGroupCallMessageSendFailed extends Update
{
    public const string TYPE_NAME = 'updateGroupCallMessageSendFailed';

    public function __construct(
        /**
         * The cause of the message sending failure.
         */
        protected Error $error,
        /**
         * Identifier of the group call.
         */
        protected int   $groupCallId,
        /**
         * Message identifier.
         */
        protected int   $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateGroupCallMessageSendFailed
    {
        return new static(
            error      : TdSchemaRegistry::fromArray($array['error']),
            groupCallId: $array['group_call_id'],
            messageId  : $array['message_id'],
        );
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setError(Error $value): static
    {
        $this->error = $value;

        return $this;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'error'         => $this->error->jsonSerialize(),
            'group_call_id' => $this->groupCallId,
            'message_id'    => $this->messageId,
        ];
    }
}
