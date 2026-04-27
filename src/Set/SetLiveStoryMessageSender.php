<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Selects a message sender to send messages in a live story call.
 */
class SetLiveStoryMessageSender extends TdFunction
{
    public const string TYPE_NAME = 'setLiveStoryMessageSender';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int           $groupCallId,
        /**
         * New message sender for the group call.
         */
        protected MessageSender $messageSenderId,
    ) {}

    public static function fromArray(array $array): SetLiveStoryMessageSender
    {
        return new static(
            groupCallId    : $array['group_call_id'],
            messageSenderId: TdSchemaRegistry::fromArray($array['message_sender_id']),
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getMessageSenderId(): MessageSender
    {
        return $this->messageSenderId;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setMessageSenderId(MessageSender $value): static
    {
        $this->messageSenderId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'group_call_id'     => $this->groupCallId,
            'message_sender_id' => $this->messageSenderId->jsonSerialize(),
        ];
    }
}
