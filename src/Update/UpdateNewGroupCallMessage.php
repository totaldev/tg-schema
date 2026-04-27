<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Group\GroupCallMessage;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new message was received in a group call.
 */
class UpdateNewGroupCallMessage extends Update
{
    public const string TYPE_NAME = 'updateNewGroupCallMessage';

    public function __construct(
        /**
         * Identifier of the group call.
         */
        protected int              $groupCallId,
        /**
         * The message.
         */
        protected GroupCallMessage $message,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewGroupCallMessage
    {
        return new static(
            groupCallId: $array['group_call_id'],
            message    : TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getMessage(): GroupCallMessage
    {
        return $this->message;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setMessage(GroupCallMessage $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'message'       => $this->message->jsonSerialize(),
        ];
    }
}
