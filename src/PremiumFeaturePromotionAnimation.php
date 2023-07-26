<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes a promotion animation for a Premium feature
 */
class PremiumFeaturePromotionAnimation extends TdObject
{
    public const TYPE_NAME = 'premiumFeaturePromotionAnimation';

    /**
     * Premium feature
     *
     * @var PremiumFeature
     */
    protected PremiumFeature $feature;

    /**
     * Promotion animation for the feature
     *
     * @var Animation
     */
    protected Animation $animation;

    public function __construct(PremiumFeature $feature, Animation $animation)
    {
        $this->feature = $feature;
        $this->animation = $animation;
    }

    public static function fromArray(array $array): PremiumFeaturePromotionAnimation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['feature']),
            TdSchemaRegistry::fromArray($array['animation']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'feature' => $this->feature->typeSerialize(),
            'animation' => $this->animation->typeSerialize(),
        ];
    }

    public function getFeature(): PremiumFeature
    {
        return $this->feature;
    }

    public function getAnimation(): Animation
    {
        return $this->animation;
    }
}
