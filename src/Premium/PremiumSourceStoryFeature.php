<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A user tried to use a Premium story feature.
 */
class PremiumSourceStoryFeature extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceStoryFeature';

    public function __construct(
        /**
         * The used feature.
         */
        protected PremiumStoryFeature $feature
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumSourceStoryFeature
    {
        return new static(
            TdSchemaRegistry::fromArray($array['feature']),
        );
    }

    public function getFeature(): PremiumStoryFeature
    {
        return $this->feature;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'feature' => $this->feature->typeSerialize(),
        ];
    }
}
