<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about features, available to Business user accounts.
 */
class BusinessFeatures extends TdObject
{
    public const string TYPE_NAME = 'businessFeatures';

    public function __construct(
        /**
         * The list of available business features.
         *
         * @var BusinessFeature[]
         */
        protected array $features
    ) {}

    public static function fromArray(array $array): BusinessFeatures
    {
        return new static(
            features: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['features']),
        );
    }

    public function getFeatures(): array
    {
        return $this->features;
    }

    public function setFeatures(array $value): static
    {
        $this->features = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'features' => array_map(static fn($x) => $x->jsonSerialize(), $this->features),
        ];
    }
}
