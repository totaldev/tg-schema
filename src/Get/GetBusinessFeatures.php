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
    public const TYPE_NAME = 'getBusinessFeatures';

    public function __construct(
        /**
         * Source of the request; pass null if the method is called from settings or some non-standard source.
         */
        protected BusinessFeature $source
    ) {}

    public static function fromArray(array $array): GetBusinessFeatures
    {
        return new static(
            TdSchemaRegistry::fromArray($array['source']),
        );
    }

    public function getSource(): BusinessFeature
    {
        return $this->source;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'source' => $this->source->typeSerialize(),
        ];
    }
}
