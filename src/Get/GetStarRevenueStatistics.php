<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns detailed Telegram Star revenue statistics.
 */
class GetStarRevenueStatistics extends TdFunction
{
    public const string TYPE_NAME = 'getStarRevenueStatistics';

    public function __construct(
        /**
         * Pass true if a dark theme is used by the application.
         */
        protected bool          $isDark,
        /**
         * Identifier of the owner of the Telegram Stars; can be identifier of the current user, an owned bot, or a supergroup or a channel chat with supergroupFullInfo.can_get_star_revenue_statistics == true.
         */
        protected MessageSender $ownerId,
    ) {}

    public static function fromArray(array $array): GetStarRevenueStatistics
    {
        return new static(
            isDark : $array['is_dark'],
            ownerId: TdSchemaRegistry::fromArray($array['owner_id']),
        );
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function setIsDark(bool $value): static
    {
        $this->isDark = $value;

        return $this;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'is_dark'  => $this->isDark,
            'owner_id' => $this->ownerId->jsonSerialize(),
        ];
    }
}
