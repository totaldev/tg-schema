<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The maximum number of suggested reaction areas on a story
 */
class PremiumLimitTypeStorySuggestedReactionAreaCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeStorySuggestedReactionAreaCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeStorySuggestedReactionAreaCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
