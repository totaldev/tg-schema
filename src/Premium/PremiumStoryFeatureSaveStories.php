<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The ability to save other's unprotected stories
 */
class PremiumStoryFeatureSaveStories extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeatureSaveStories';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeatureSaveStories
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
