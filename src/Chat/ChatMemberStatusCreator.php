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
    public const string TYPE_NAME = 'chatMemberStatusCreator';

    public function __construct(
        /**
         * True, if the creator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only.
         */
        protected bool $isAnonymous,
        /**
         * True, if the user is a member of the chat.
         */
        protected bool $isMember,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMemberStatusCreator
    {
        return new static(
            isAnonymous: $array['is_anonymous'],
            isMember   : $array['is_member'],
        );
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getIsMember(): bool
    {
        return $this->isMember;
    }

    public function setIsAnonymous(bool $value): static
    {
        $this->isAnonymous = $value;

        return $this;
    }

    public function setIsMember(bool $value): static
    {
        $this->isMember = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'is_anonymous' => $this->isAnonymous,
            'is_member'    => $this->isMember,
        ];
    }
}
