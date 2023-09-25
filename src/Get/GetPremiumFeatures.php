<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Premium\PremiumSource;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about features, available to Premium users
 */
class GetPremiumFeatures extends TdFunction
{
    public const TYPE_NAME = 'getPremiumFeatures';

    /**
     * Source of the request; pass null if the method is called from some non-standard source
     *
     * @var PremiumSource
     */
    protected PremiumSource $source;

    public function __construct(PremiumSource $source)
    {
        $this->source = $source;
    }

    public static function fromArray(array $array): GetPremiumFeatures
    {
        return new static(
            TdSchemaRegistry::fromArray($array['source']),
        );
    }

    public function getSource(): PremiumSource
    {
        return $this->source;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'source' => $this->source->typeSerialize(),
        ];
    }
}
