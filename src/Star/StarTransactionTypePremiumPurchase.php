<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of Telegram Premium subscription; relevant for regular users and bots only.
 */
class StarTransactionTypePremiumPurchase extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypePremiumPurchase';

    public function __construct(
        /**
         * Number of months the Telegram Premium subscription will be active.
         */
        protected int      $monthCount,
        /**
         * A sticker to be shown in the transaction information; may be null if unknown.
         */
        protected ?Sticker $sticker,
        /**
         * Identifier of the user who received the Telegram Premium subscription.
         */
        protected int      $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypePremiumPurchase
    {
        return new static(
            monthCount: $array['month_count'],
            sticker   : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            userId    : $array['user_id'],
        );
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

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
            '@type'       => static::TYPE_NAME,
            'month_count' => $this->monthCount,
            'sticker'     => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'user_id'     => $this->userId,
        ];
    }
}
