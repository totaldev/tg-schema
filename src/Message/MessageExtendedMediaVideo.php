<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * The media is a video
 */
class MessageExtendedMediaVideo extends MessageExtendedMedia
{
    public const TYPE_NAME = 'messageExtendedMediaVideo';

    /**
     * Photo caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * The video
     *
     * @var Video
     */
    protected Video $video;

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

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getVideo(): Video
    {
        return $this->video;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'video' => $this->video->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
