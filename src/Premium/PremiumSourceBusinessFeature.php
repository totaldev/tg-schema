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
        protected ?BusinessFeature $feature = null
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumSourceBusinessFeature
    {
        return new static(
            isset($array['feature']) ? TdSchemaRegistry::fromArray($array['feature']) : null,
        );
    }

    public function getFeature(): ?BusinessFeature
    {
        return $this->feature;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'feature' => $this->feature ?? null,
        ];
    }
}
