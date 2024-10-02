<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is the owner of the chat and has all the administrator privileges.
 */
class ChatMemberStatusCreator extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusCreator';

    public function __construct(
        /**
         * A custom title of the owner; 0-16 characters without emoji; applicable to supergroups only.
         */
        protected string $customTitle,
        /**
         * True, if the creator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only.
         */
        protected bool   $isAnonymous,
        /**
         * True, if the user is a member of the chat.
         */
        protected bool   $isMember,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMemberStatusCreator
    {
        return new static(
            $array['custom_title'],
            $array['is_anonymous'],
            $array['is_member'],
        );
    }

    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getIsMember(): bool
    {
        return $this->isMember;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'custom_title' => $this->customTitle,
            'is_anonymous' => $this->isAnonymous,
            'is_member'    => $this->isMember,
        ];
    }
}
