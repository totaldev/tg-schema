<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a Telegram Premium gift code.
 */
class PremiumGiftCodeInfo extends TdObject
{
    public const TYPE_NAME = 'premiumGiftCodeInfo';

    public function __construct(
        /**
         * Identifier of a chat or a user that created the gift code; may be null if unknown. If null and the code is from messagePremiumGiftCode message, then creator_id from the message can be used.
         */
        protected ?MessageSender $creatorId,
        /**
         * Point in time (Unix timestamp) when the code was created.
         */
        protected int            $creationDate,
        /**
         * True, if the gift code was created for a giveaway.
         */
        protected bool           $isFromGiveaway,
        /**
         * Identifier of the corresponding giveaway message in the creator_id chat; can be 0 or an identifier of a deleted message.
         */
        protected int            $giveawayMessageId,
        /**
         * Number of months the Telegram Premium subscription will be active after code activation.
         */
        protected int            $monthCount,
        /**
         * Identifier of a user for which the code was created; 0 if none.
         */
        protected int            $userId,
        /**
         * Point in time (Unix timestamp) when the code was activated; 0 if none.
         */
        protected int            $useDate,
    ) {}

    public static function fromArray(array $array): PremiumGiftCodeInfo
    {
        return new static(
            isset($array['creator_id']) ? TdSchemaRegistry::fromArray($array['creator_id']) : null,
            $array['creation_date'],
            $array['is_from_giveaway'],
            $array['giveaway_message_id'],
            $array['month_count'],
            $array['user_id'],
            $array['use_date'],
        );
    }

    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    public function getCreatorId(): ?MessageSender
    {
        return $this->creatorId;
    }

    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    public function getIsFromGiveaway(): bool
    {
        return $this->isFromGiveaway;
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getUseDate(): int
    {
        return $this->useDate;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'creator_id'          => (isset($this->creatorId) ? $this->creatorId : null),
            'creation_date'       => $this->creationDate,
            'is_from_giveaway'    => $this->isFromGiveaway,
            'giveaway_message_id' => $this->giveawayMessageId,
            'month_count'         => $this->monthCount,
            'user_id'             => $this->userId,
            'use_date'            => $this->useDate,
        ];
    }
}
