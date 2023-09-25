<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * A video message
 */
class MessageVideo extends MessageContent
{
    public const TYPE_NAME = 'messageVideo';

    /**
     * Video caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * True, if the video preview must be covered by a spoiler animation
     *
     * @var bool
     */
    protected bool $hasSpoiler;

    /**
     * True, if the video thumbnail must be blurred and the video must be shown only while tapped
     *
     * @var bool
     */
    protected bool $isSecret;

    /**
     * The video description
     *
     * @var Video
     */
    protected Video $video;

    public function __construct(Video $video, FormattedText $caption, bool $hasSpoiler, bool $isSecret)
    {
        parent::__construct();

        $this->video = $video;
        $this->caption = $caption;
        $this->hasSpoiler = $hasSpoiler;
        $this->isSecret = $isSecret;
    }

    public static function fromArray(array $array): MessageVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['has_spoiler'],
            $array['is_secret'],
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
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
            'has_spoiler' => $this->hasSpoiler,
            'is_secret' => $this->isSecret,
        ];
    }
}
