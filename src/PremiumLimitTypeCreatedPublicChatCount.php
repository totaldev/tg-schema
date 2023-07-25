<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The maximum number of created public chats
 */
class PremiumLimitTypeCreatedPublicChatCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeCreatedPublicChatCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeCreatedPublicChatCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
