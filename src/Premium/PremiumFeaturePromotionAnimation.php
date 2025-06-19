<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a promotion animation for a Premium feature.
 */
class PremiumFeaturePromotionAnimation extends TdObject
{
    public const TYPE_NAME = 'premiumFeaturePromotionAnimation';

    public function __construct(
        /**
         * Premium feature.
         */
        protected PremiumFeature $feature,
        /**
         * Promotion animation for the feature.
         */
        protected Animation      $animation
    ) {}

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
            '@type'     => static::TYPE_NAME,
            'feature'   => $this->feature->typeSerialize(),
            'animation' => $this->animation->typeSerialize(),
        ];
    }
}
