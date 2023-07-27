<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of favorite stickers
 */
class PremiumLimitTypeFavoriteStickerCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeFavoriteStickerCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeFavoriteStickerCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
