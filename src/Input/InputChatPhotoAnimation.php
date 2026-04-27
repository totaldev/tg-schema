<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An animation in MPEG4 format; must be square, at most 10 seconds long, have width between 160 and 1280 and be at most 2MB in size.
 */
class InputChatPhotoAnimation extends InputChatPhoto
{
    public const string TYPE_NAME = 'inputChatPhotoAnimation';

    public function __construct(
        /**
         * Animation to be set as profile photo. Only inputFileLocal and inputFileGenerated are allowed.
         */
        protected InputFile $animation,
        /**
         * Timestamp of the frame, which will be used as static chat photo.
         */
        protected float     $mainFrameTimestamp,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputChatPhotoAnimation
    {
        return new static(
            animation         : TdSchemaRegistry::fromArray($array['animation']),
            mainFrameTimestamp: $array['main_frame_timestamp'],
        );
    }

    public function getAnimation(): InputFile
    {
        return $this->animation;
    }

    public function getMainFrameTimestamp(): float
    {
        return $this->mainFrameTimestamp;
    }

    public function setAnimation(InputFile $value): static
    {
        $this->animation = $value;

        return $this;
    }

    public function setMainFrameTimestamp(float $value): static
    {
        $this->mainFrameTimestamp = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'animation'            => $this->animation->jsonSerialize(),
            'main_frame_timestamp' => $this->mainFrameTimestamp,
        ];
    }
}
