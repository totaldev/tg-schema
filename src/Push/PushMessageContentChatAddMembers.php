<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * New chat members were invited to a group.
 */
class PushMessageContentChatAddMembers extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatAddMembers';

    public function __construct(
        /**
         * Name of the added member.
         */
        protected string $memberName,
        /**
         * True, if the current user was added to the group.
         */
        protected bool   $isCurrentUser,
        /**
         * True, if the user has returned to the group themselves.
         */
        protected bool   $isReturned,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatAddMembers
    {
        return new static(
            $array['member_name'],
            $array['is_current_user'],
            $array['is_returned'],
        );
    }

    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    public function getIsReturned(): bool
    {
        return $this->isReturned;
    }

    public function getMemberName(): string
    {
        return $this->memberName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'member_name'     => $this->memberName,
            'is_current_user' => $this->isCurrentUser,
            'is_returned'     => $this->isReturned,
        ];
    }
}
