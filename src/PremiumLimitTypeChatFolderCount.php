<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The maximum number of chat folders
 */
class PremiumLimitTypeChatFolderCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeChatFolderCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeChatFolderCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
