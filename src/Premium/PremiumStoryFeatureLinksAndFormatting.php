<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The ability to use links and formatting in story caption
 */
class PremiumStoryFeatureLinksAndFormatting extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeatureLinksAndFormatting';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeatureLinksAndFormatting
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
