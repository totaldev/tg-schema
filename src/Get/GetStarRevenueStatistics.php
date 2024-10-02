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
    public const TYPE_NAME = 'getStarRevenueStatistics';

    public function __construct(
        /**
         * Identifier of the owner of the Telegram Stars; can be identifier of an owned bot, or identifier of a channel chat with supergroupFullInfo.can_get_star_revenue_statistics == true.
         */
        protected MessageSender $ownerId,
        /**
         * Pass true if a dark theme is used by the application.
         */
        protected bool          $isDark,
    ) {}

    public static function fromArray(array $array): GetStarRevenueStatistics
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['is_dark'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'owner_id' => $this->ownerId->typeSerialize(),
            'is_dark'  => $this->isDark,
        ];
    }
}
