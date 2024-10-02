<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user or the chat was banned (and hence is not a member of the chat). Implies the user can't return to the chat, view messages, or be used as a
 * participant identifier to join a video chat of the chat.
 */
class ChatMemberStatusBanned extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusBanned';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever. Always 0 in basic groups.
         */
        protected int $bannedUntilDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMemberStatusBanned
    {
        return new static(
            $array['banned_until_date'],
        );
    }

    public function getBannedUntilDate(): int
    {
        return $this->bannedUntilDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'banned_until_date' => $this->bannedUntilDate,
        ];
    }
}
