<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A message with information about an invitation to a video chat.
 */
class MessageInviteVideoChatParticipants extends MessageContent
{
    public const string TYPE_NAME = 'messageInviteVideoChatParticipants';

    public function __construct(
        /**
         * Identifier of the video chat. The video chat can be received through the method getGroupCall.
         */
        protected int   $groupCallId,
        /**
         * Invited user identifiers.
         *
         * @var int[]
         */
        protected array $userIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageInviteVideoChatParticipants
    {
        return new static(
            groupCallId: $array['group_call_id'],
            userIds    : $array['user_ids'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setUserIds(array $value): static
    {
        $this->userIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'user_ids'      => $this->userIds,
        ];
    }
}
