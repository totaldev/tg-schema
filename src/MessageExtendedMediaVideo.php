<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The media is a video
 */
class MessageExtendedMediaVideo extends MessageExtendedMedia
{
    public const TYPE_NAME = 'messageExtendedMediaVideo';

    /**
     * The video
     *
     * @var Video
     */
    protected Video $video;

    /**
     * Photo caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(Video $video, FormattedText $caption)
    {
        parent::__construct();

        $this->video = $video;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): MessageExtendedMediaVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'video' => $this->video->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }

    public function getVideo(): Video
    {
        return $this->video;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
