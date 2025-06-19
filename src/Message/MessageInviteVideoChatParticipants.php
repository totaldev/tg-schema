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
    public const TYPE_NAME = 'messageInviteVideoChatParticipants';

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
        protected array $userIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageInviteVideoChatParticipants
    {
        return new static(
            $array['group_call_id'],
            $array['user_ids'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'user_ids'      => $this->userIds,
        ];
    }
}
