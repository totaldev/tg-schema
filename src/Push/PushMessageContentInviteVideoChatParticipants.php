<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * An invitation of participants to a video chat or live stream.
 */
class PushMessageContentInviteVideoChatParticipants extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentInviteVideoChatParticipants';

    public function __construct(
        /**
         * True, if the current user was invited to the video chat or the live stream.
         */
        protected bool $isCurrentUser
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentInviteVideoChatParticipants
    {
        return new static(
            $array['is_current_user'],
        );
    }

    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'is_current_user' => $this->isCurrentUser,
        ];
    }
}
