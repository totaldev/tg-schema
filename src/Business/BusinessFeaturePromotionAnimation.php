<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a promotion animation for a Business feature.
 */
class BusinessFeaturePromotionAnimation extends TdObject
{
    public const TYPE_NAME = 'businessFeaturePromotionAnimation';

    public function __construct(
        /**
         * Business feature.
         */
        protected BusinessFeature $feature,
        /**
         * Promotion animation for the feature.
         */
        protected Animation       $animation,
    ) {}

    public static function fromArray(array $array): BusinessFeaturePromotionAnimation
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

    public function getFeature(): BusinessFeature
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
