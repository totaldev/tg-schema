<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An animation.
 */
class PageBlockAnimation extends PageBlock
{
    public const TYPE_NAME = 'pageBlockAnimation';

    public function __construct(
        /**
         * Animation file; may be null.
         */
        protected ?Animation       $animation,
        /**
         * Animation caption.
         */
        protected PageBlockCaption $caption,
        /**
         * True, if the animation must be played automatically.
         */
        protected bool             $needAutoplay
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockAnimation
    {
        return new static(
            isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null,
            TdSchemaRegistry::fromArray($array['caption']),
            $array['need_autoplay'],
        );
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getNeedAutoplay(): bool
    {
        return $this->needAutoplay;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'animation'     => (isset($this->animation) ? $this->animation : null),
            'caption'       => $this->caption->typeSerialize(),
            'need_autoplay' => $this->needAutoplay,
        ];
    }
}
