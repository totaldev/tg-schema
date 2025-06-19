<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An animation message (GIF-style).
 */
class PushMessageContentAnimation extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentAnimation';

    public function __construct(
        /**
         * Message content; may be null.
         */
        protected ?Animation $animation,
        /**
         * Animation caption.
         */
        protected string     $caption,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool       $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentAnimation
    {
        return new static(
            isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null,
            $array['caption'],
            $array['is_pinned'],
        );
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'animation' => (isset($this->animation) ? $this->animation : null),
            'caption'   => $this->caption,
            'is_pinned' => $this->isPinned,
        ];
    }
}
