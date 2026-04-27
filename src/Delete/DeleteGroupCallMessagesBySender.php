<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Deletes all messages sent by the specified message sender in a group call; for live story calls only. Requires groupCall.can_delete_messages right.
 */
class DeleteGroupCallMessagesBySender extends TdFunction
{
    public const string TYPE_NAME = 'deleteGroupCallMessagesBySender';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int           $groupCallId,
        /**
         * Pass true to report the messages as spam.
         */
        protected bool          $reportSpam,
        /**
         * Identifier of the sender of messages to delete.
         */
        protected MessageSender $senderId,
    ) {}

    public static function fromArray(array $array): DeleteGroupCallMessagesBySender
    {
        return new static(
            groupCallId: $array['group_call_id'],
            reportSpam : $array['report_spam'],
            senderId   : TdSchemaRegistry::fromArray($array['sender_id']),
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getReportSpam(): bool
    {
        return $this->reportSpam;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setReportSpam(bool $value): static
    {
        $this->reportSpam = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'report_spam'   => $this->reportSpam,
            'sender_id'     => $this->senderId->jsonSerialize(),
        ];
    }
}
