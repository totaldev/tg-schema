<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes messages in a group call; for live story calls only. Requires groupCallMessage.can_be_deleted right.
 */
class DeleteGroupCallMessages extends TdFunction
{
    public const string TYPE_NAME = 'deleteGroupCallMessages';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int   $groupCallId,
        /**
         * Identifiers of the messages to be deleted.
         *
         * @var int[]
         */
        protected array $messageIds,
        /**
         * Pass true to report the messages as spam.
         */
        protected bool  $reportSpam,
    ) {}

    public static function fromArray(array $array): DeleteGroupCallMessages
    {
        return new static(
            groupCallId: $array['group_call_id'],
            messageIds : $array['message_ids'],
            reportSpam : $array['report_spam'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getReportSpam(): bool
    {
        return $this->reportSpam;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setMessageIds(array $value): static
    {
        $this->messageIds = $value;

        return $this;
    }

    public function setReportSpam(bool $value): static
    {
        $this->reportSpam = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'message_ids'   => $this->messageIds,
            'report_spam'   => $this->reportSpam,
        ];
    }
}
