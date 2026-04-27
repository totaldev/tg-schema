<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Premium\PremiumSource;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about features, available to Premium users.
 */
class GetPremiumFeatures extends TdFunction
{
    public const string TYPE_NAME = 'getPremiumFeatures';

    public function __construct(
        /**
         * Source of the request; pass null if the method is called from some non-standard source.
         */
        protected ?PremiumSource $source = null
    ) {}

    public static function fromArray(array $array): GetPremiumFeatures
    {
        return new static(
            source: (isset($array['source']) ? TdSchemaRegistry::fromArray($array['source']) : null),
        );
    }

    public function getSource(): ?PremiumSource
    {
        return $this->source;
    }

    public function setSource(?PremiumSource $value): static
    {
        $this->source = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'source' => (null !== $this->source ? $this->source->jsonSerialize() : null),
        ];
    }
}
