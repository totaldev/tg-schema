<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * User stories are displayed before stories of non-premium contacts
 */
class PremiumStoryFeaturePriorityOrder extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeaturePriorityOrder';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeaturePriorityOrder
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
