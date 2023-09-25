<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a promotion animation for a Premium feature
 */
class PremiumFeaturePromotionAnimation extends TdObject
{
    public const TYPE_NAME = 'premiumFeaturePromotionAnimation';

    /**
     * Promotion animation for the feature
     *
     * @var Animation
     */
    protected Animation $animation;

    /**
     * Premium feature
     *
     * @var PremiumFeature
     */
    protected PremiumFeature $feature;

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

    public function getAnimation(): Animation
    {
        return $this->animation;
    }

    public function getFeature(): PremiumFeature
    {
        return $this->feature;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'feature' => $this->feature->typeSerialize(),
            'animation' => $this->animation->typeSerialize(),
        ];
    }
}
