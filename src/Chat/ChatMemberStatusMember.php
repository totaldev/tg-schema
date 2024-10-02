<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is a member of the chat, without any additional privileges or restrictions.
 */
class ChatMemberStatusMember extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusMember';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the user will be removed from the chat because of the expired subscription; 0 if never. Ignored in setChatMemberStatus.
         */
        protected int $memberUntilDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMemberStatusMember
    {
        return new static(
            $array['member_until_date'],
        );
    }

    public function getMemberUntilDate(): int
    {
        return $this->memberUntilDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'member_until_date' => $this->memberUntilDate,
        ];
    }
}
