<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to an animation.
 */
class LinkPreviewTypeAnimation extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeAnimation';

    public function __construct(
        /**
         * The animation.
         */
        protected Animation $animation
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeAnimation
    {
        return new static(
            animation: TdSchemaRegistry::fromArray($array['animation']),
        );
    }

    public function getAnimation(): Animation
    {
        return $this->animation;
    }

    public function setAnimation(Animation $value): static
    {
        $this->animation = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'animation' => $this->animation->jsonSerialize(),
        ];
    }
}
