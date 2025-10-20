<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a slot for chat boost.
 */
class ChatBoostSlot extends TdObject
{
    public const TYPE_NAME = 'chatBoostSlot';

    public function __construct(
        /**
         * Unique identifier of the slot.
         */
        protected int $slotId,
        /**
         * Identifier of the currently boosted chat; 0 if none.
         */
        protected int $currentlyBoostedChatId,
        /**
         * Point in time (Unix timestamp) when the chat was boosted; 0 if none.
         */
        protected int $startDate,
        /**
         * Point in time (Unix timestamp) when the boost will expire.
         */
        protected int $expirationDate,
        /**
         * Point in time (Unix timestamp) after which the boost can be used for another chat.
         */
        protected int $cooldownUntilDate,
    ) {}

    public static function fromArray(array $array): ChatBoostSlot
    {
        return new static(
            $array['slot_id'],
            $array['currently_boosted_chat_id'],
            $array['start_date'],
            $array['expiration_date'],
            $array['cooldown_until_date'],
        );
    }

    public function getCooldownUntilDate(): int
    {
        return $this->cooldownUntilDate;
    }

    public function getCurrentlyBoostedChatId(): int
    {
        return $this->currentlyBoostedChatId;
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getSlotId(): int
    {
        return $this->slotId;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'slot_id'                   => $this->slotId,
            'currently_boosted_chat_id' => $this->currentlyBoostedChatId,
            'start_date'                => $this->startDate,
            'expiration_date'           => $this->expirationDate,
            'cooldown_until_date'       => $this->cooldownUntilDate,
        ];
    }
}
