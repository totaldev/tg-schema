<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

/**
 * The user can't participate in the giveaway, because they have already been member of the chat.
 */
class GiveawayParticipantStatusAlreadyWasMember extends GiveawayParticipantStatus
{
    public const TYPE_NAME = 'giveawayParticipantStatusAlreadyWasMember';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the user joined the chat.
         */
        protected int $joinedChatDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayParticipantStatusAlreadyWasMember
    {
        return new static(
            $array['joined_chat_date'],
        );
    }

    public function getJoinedChatDate(): int
    {
        return $this->joinedChatDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'joined_chat_date' => $this->joinedChatDate,
        ];
    }
}
