<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A user tried to use a Premium feature.
 */
class PremiumSourceFeature extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceFeature';

    public function __construct(
        /**
         * The used feature.
         */
        protected PremiumFeature $feature
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumSourceFeature
    {
        return new static(
            TdSchemaRegistry::fromArray($array['feature']),
        );
    }

    public function getFeature(): PremiumFeature
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
