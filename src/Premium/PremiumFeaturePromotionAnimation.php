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
    public const string TYPE_NAME = 'premiumFeaturePromotionAnimation';

    public function __construct(
        /**
         * Promotion animation for the feature.
         */
        protected Animation      $animation,
        /**
         * Premium feature.
         */
        protected PremiumFeature $feature,
    ) {}

    public static function fromArray(array $array): PremiumFeaturePromotionAnimation
    {
        return new static(
            animation: TdSchemaRegistry::fromArray($array['animation']),
            feature  : TdSchemaRegistry::fromArray($array['feature']),
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

    public function setAnimation(Animation $value): static
    {
        $this->animation = $value;

        return $this;
    }

    public function setFeature(PremiumFeature $value): static
    {
        $this->feature = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'animation' => $this->animation->jsonSerialize(),
            'feature'   => $this->feature->jsonSerialize(),
        ];
    }
}
