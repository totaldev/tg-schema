<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An animation in MPEG4 format; must be square, at most 10 seconds long, have width between 160 and 1280 and be at most 2MB in size
 */
class InputChatPhotoAnimation extends InputChatPhoto
{
    public const TYPE_NAME = 'inputChatPhotoAnimation';

    /**
     * Animation to be set as profile photo. Only inputFileLocal and inputFileGenerated are allowed
     *
     * @var InputFile
     */
    protected InputFile $animation;

    /**
     * Timestamp of the frame, which will be used as static chat photo
     *
     * @var float
     */
    protected float $mainFrameTimestamp;

    public function __construct(InputFile $animation, float $mainFrameTimestamp)
    {
        parent::__construct();

        $this->animation = $animation;
        $this->mainFrameTimestamp = $mainFrameTimestamp;
    }

    public static function fromArray(array $array): InputChatPhotoAnimation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animation']),
            $array['main_frame_timestamp'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'animation' => $this->animation->typeSerialize(),
            'main_frame_timestamp' => $this->mainFrameTimestamp,
        ];
    }
}
