<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of received similar chats.
 */
class PremiumLimitTypeSimilarChatCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeSimilarChatCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeSimilarChatCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
