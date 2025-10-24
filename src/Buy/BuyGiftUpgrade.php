<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Buy;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Pays for upgrade of a regular gift that is owned by another user or channel chat.
 */
class BuyGiftUpgrade extends TdFunction
{
    public const string TYPE_NAME = 'buyGiftUpgrade';

    public function __construct(
        /**
         * Identifier of the user or the channel chat that owns the gift.
         */
        protected MessageSender $ownerId,
        /**
         * Prepaid upgrade hash as received along with the gift.
         */
        protected string        $prepaidUpgradeHash,
        /**
         * The amount of Telegram Stars the user agreed to pay for the upgrade; must be equal to gift.upgrade_star_count.
         */
        protected int           $starCount,
    ) {}

    public static function fromArray(array $array): BuyGiftUpgrade
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['prepaid_upgrade_hash'],
            $array['star_count'],
        );
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getPrepaidUpgradeHash(): string
    {
        return $this->prepaidUpgradeHash;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function setPrepaidUpgradeHash(string $value): static
    {
        $this->prepaidUpgradeHash = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'owner_id'             => $this->ownerId->typeSerialize(),
            'prepaid_upgrade_hash' => $this->prepaidUpgradeHash,
            'star_count'           => $this->starCount,
        ];
    }
}
