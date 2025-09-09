<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

/**
 * The user can't participate in the giveaway, because they are an administrator in one of the chats that created the giveaway.
 */
class GiveawayParticipantStatusAdministrator extends GiveawayParticipantStatus
{
    public const TYPE_NAME = 'giveawayParticipantStatusAdministrator';

    public function __construct(
        /**
         * Identifier of the chat administered by the user.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayParticipantStatusAdministrator
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
