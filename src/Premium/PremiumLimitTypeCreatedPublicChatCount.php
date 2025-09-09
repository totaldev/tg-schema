<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of created public chats.
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
