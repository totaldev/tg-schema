<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user must have Telegram Premium subscription instead of a gifted Telegram Premium
 */
class CanBoostChatResultPremiumSubscriptionNeeded extends CanBoostChatResult
{
    public const TYPE_NAME = 'canBoostChatResultPremiumSubscriptionNeeded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanBoostChatResultPremiumSubscriptionNeeded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
