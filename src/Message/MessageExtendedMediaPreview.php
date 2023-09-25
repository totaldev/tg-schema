<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The media is hidden until the invoice is paid
 */
class MessageExtendedMediaPreview extends MessageExtendedMedia
{
    public const TYPE_NAME = 'messageExtendedMediaPreview';

    /**
     * Media caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * Media duration; 0 if unknown
     *
     * @var int
     */
    protected int $duration;

    /**
     * Media height; 0 if unknown
     *
     * @var int
     */
    protected int $height;

    /**
     * Media minithumbnail; may be null
     *
     * @var Minithumbnail|null
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Media width; 0 if unknown
     *
     * @var int
     */
    protected int $width;

    public function __construct(
        int            $width,
        int            $height,
        int            $duration,
        ?Minithumbnail $minithumbnail,
        FormattedText  $caption,
    )
    {
        parent::__construct();

        $this->width = $width;
        $this->height = $height;
        $this->duration = $duration;
        $this->minithumbnail = $minithumbnail;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): MessageExtendedMediaPreview
    {
        return new static(
            $array['width'],
            $array['height'],
            $array['duration'],
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'width' => $this->width,
            'height' => $this->height,
            'duration' => $this->duration,
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
