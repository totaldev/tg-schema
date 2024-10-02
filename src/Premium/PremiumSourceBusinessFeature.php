<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Business\BusinessFeature;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A user tried to use a Business feature.
 */
class PremiumSourceBusinessFeature extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceBusinessFeature';

    public function __construct(
        /**
         * The used feature; pass null if none specific feature was used.
         */
        protected BusinessFeature $feature
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumSourceBusinessFeature
    {
        return new static(
            TdSchemaRegistry::fromArray($array['feature']),
        );
    }

    public function getFeature(): BusinessFeature
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
