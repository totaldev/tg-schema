<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A user tried to use a Premium feature
 */
class PremiumSourceFeature extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceFeature';

    /**
     * The used feature
     *
     * @var PremiumFeature
     */
    protected PremiumFeature $feature;

    public function __construct(PremiumFeature $feature)
    {
        parent::__construct();

        $this->feature = $feature;
    }

    public static function fromArray(array $array): PremiumSourceFeature
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

    public function getFeature(): PremiumFeature
    {
        return $this->feature;
    }
}
