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
    public const string TYPE_NAME = 'pushMessageContentChatAddMembers';

    public function __construct(
        /**
         * True, if the current user was added to the group.
         */
        protected bool   $isCurrentUser,
        /**
         * True, if the user has returned to the group themselves.
         */
        protected bool   $isReturned,
        /**
         * Name of the added member.
         */
        protected string $memberName,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatAddMembers
    {
        return new static(
            isCurrentUser: $array['is_current_user'],
            isReturned   : $array['is_returned'],
            memberName   : $array['member_name'],
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

    public function setIsCurrentUser(bool $value): static
    {
        $this->isCurrentUser = $value;

        return $this;
    }

    public function setIsReturned(bool $value): static
    {
        $this->isReturned = $value;

        return $this;
    }

    public function setMemberName(string $value): static
    {
        $this->memberName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'is_current_user' => $this->isCurrentUser,
            'is_returned'     => $this->isReturned,
            'member_name'     => $this->memberName,
        ];
    }
}
