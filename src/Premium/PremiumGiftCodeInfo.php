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
    public const string TYPE_NAME = 'premiumGiftCodeInfo';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the code was created.
         */
        protected int            $creationDate,
        /**
         * Identifier of a chat or a user that created the gift code; may be null if unknown. If null and the code is from messagePremiumGiftCode message, then creator_id from the message can be used.
         */
        protected ?MessageSender $creatorId,
        /**
         * Identifier of the corresponding giveaway message in the creator_id chat; can be 0 or an identifier of a deleted message.
         */
        protected int            $giveawayMessageId,
        /**
         * True, if the gift code was created for a giveaway.
         */
        protected bool           $isFromGiveaway,
        /**
         * Number of months the Telegram Premium subscription will be active after code activation.
         */
        protected int            $monthCount,
        /**
         * Point in time (Unix timestamp) when the code was activated; 0 if none.
         */
        protected int            $useDate,
        /**
         * Identifier of a user for which the code was created; 0 if none.
         */
        protected int            $userId,
    ) {}

    public static function fromArray(array $array): PremiumGiftCodeInfo
    {
        return new static(
            creationDate     : $array['creation_date'],
            creatorId        : (isset($array['creator_id']) ? TdSchemaRegistry::fromArray($array['creator_id']) : null),
            giveawayMessageId: $array['giveaway_message_id'],
            isFromGiveaway   : $array['is_from_giveaway'],
            monthCount       : $array['month_count'],
            useDate          : $array['use_date'],
            userId           : $array['user_id'],
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

    public function setCreationDate(int $value): static
    {
        $this->creationDate = $value;

        return $this;
    }

    public function setCreatorId(?MessageSender $value): static
    {
        $this->creatorId = $value;

        return $this;
    }

    public function setGiveawayMessageId(int $value): static
    {
        $this->giveawayMessageId = $value;

        return $this;
    }

    public function setIsFromGiveaway(bool $value): static
    {
        $this->isFromGiveaway = $value;

        return $this;
    }

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function setUseDate(int $value): static
    {
        $this->useDate = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'creation_date'       => $this->creationDate,
            'creator_id'          => (null !== $this->creatorId ? $this->creatorId->jsonSerialize() : null),
            'giveaway_message_id' => $this->giveawayMessageId,
            'is_from_giveaway'    => $this->isFromGiveaway,
            'month_count'         => $this->monthCount,
            'use_date'            => $this->useDate,
            'user_id'             => $this->userId,
        ];
    }
}
