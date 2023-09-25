<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A user tried to use a Premium story feature
 */
class PremiumSourceStoryFeature extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceStoryFeature';

    /**
     * The used feature
     *
     * @var PremiumStoryFeature
     */
    protected PremiumStoryFeature $feature;

    public function __construct(PremiumStoryFeature $feature)
    {
        parent::__construct();

        $this->feature = $feature;
    }

    public static function fromArray(array $array): PremiumSourceStoryFeature
    {
        return new static(
            TdSchemaRegistry::fromArray($array['feature']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'feature' => $this->feature->typeSerialize(),
        ];
    }

    public function getFeature(): PremiumStoryFeature
    {
        return $this->feature;
    }
}
