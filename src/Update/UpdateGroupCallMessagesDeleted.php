<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Some group call messages were deleted.
 */
class UpdateGroupCallMessagesDeleted extends Update
{
    public const string TYPE_NAME = 'updateGroupCallMessagesDeleted';

    public function __construct(
        /**
         * Identifier of the group call.
         */
        protected int   $groupCallId,
        /**
         * Identifiers of the deleted messages.
         *
         * @var int[]
         */
        protected array $messageIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateGroupCallMessagesDeleted
    {
        return new static(
            groupCallId: $array['group_call_id'],
            messageIds : $array['message_ids'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'message_ids'   => $this->messageIds,
        ];
    }
}
