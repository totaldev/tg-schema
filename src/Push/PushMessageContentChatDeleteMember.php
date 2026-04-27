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
    public const string TYPE_NAME = 'pushMessageContentChatDeleteMember';

    public function __construct(
        /**
         * True, if the current user was deleted from the group.
         */
        protected bool   $isCurrentUser,
        /**
         * True, if the user has left the group themselves.
         */
        protected bool   $isLeft,
        /**
         * Name of the deleted member.
         */
        protected string $memberName,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatDeleteMember
    {
        return new static(
            isCurrentUser: $array['is_current_user'],
            isLeft       : $array['is_left'],
            memberName   : $array['member_name'],
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

    public function setIsCurrentUser(bool $value): static
    {
        $this->isCurrentUser = $value;

        return $this;
    }

    public function setIsLeft(bool $value): static
    {
        $this->isLeft = $value;

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
            'is_left'         => $this->isLeft,
            'member_name'     => $this->memberName,
        ];
    }
}
