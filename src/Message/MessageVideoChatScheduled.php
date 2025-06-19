<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A new video chat was scheduled.
 */
class MessageVideoChatScheduled extends MessageContent
{
    public const TYPE_NAME = 'messageVideoChatScheduled';

    public function __construct(
        /**
         * Identifier of the video chat. The video chat can be received through the method getGroupCall.
         */
        protected int $groupCallId,
        /**
         * Point in time (Unix timestamp) when the group call is expected to be started by an administrator.
         */
        protected int $startDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageVideoChatScheduled
    {
        return new static(
            $array['group_call_id'],
            $array['start_date'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'start_date'    => $this->startDate,
        ];
    }
}
