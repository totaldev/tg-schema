<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Business\BusinessFeature;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about features, available to Business users.
 */
class GetBusinessFeatures extends TdFunction
{
    public const string TYPE_NAME = 'getBusinessFeatures';

    public function __construct(
        /**
         * Source of the request; pass null if the method is called from settings or some non-standard source.
         */
        protected ?BusinessFeature $source = null
    ) {}

    public static function fromArray(array $array): GetBusinessFeatures
    {
        return new static(
            source: (isset($array['source']) ? TdSchemaRegistry::fromArray($array['source']) : null),
        );
    }

    public function getSource(): ?BusinessFeature
    {
        return $this->source;
    }

    public function setSource(?BusinessFeature $value): static
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
