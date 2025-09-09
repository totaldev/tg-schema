<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to gift Telegram Premium to friends for Christmas.
 */
class SuggestedActionGiftPremiumForChristmas extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionGiftPremiumForChristmas';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionGiftPremiumForChristmas
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
