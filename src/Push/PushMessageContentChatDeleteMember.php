<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A chat member was deleted.
 */
class PushMessageContentChatDeleteMember extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatDeleteMember';

    public function __construct(
        /**
         * Name of the deleted member.
         */
        protected string $memberName,
        /**
         * True, if the current user was deleted from the group.
         */
        protected bool   $isCurrentUser,
        /**
         * True, if the user has left the group themselves.
         */
        protected bool   $isLeft
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatDeleteMember
    {
        return new static(
            $array['member_name'],
            $array['is_current_user'],
            $array['is_left'],
        );
    }

    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    public function getIsLeft(): bool
    {
        return $this->isLeft;
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
            'is_left'         => $this->isLeft,
        ];
    }
}
