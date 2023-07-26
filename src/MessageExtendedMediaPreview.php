<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The media is hidden until the invoice is paid
 */
class MessageExtendedMediaPreview extends MessageExtendedMedia
{
    public const TYPE_NAME = 'messageExtendedMediaPreview';

    /**
     * Media width; 0 if unknown
     *
     * @var int
     */
    protected int $width;

    /**
     * Media height; 0 if unknown
     *
     * @var int
     */
    protected int $height;

    /**
     * Media duration; 0 if unknown
     *
     * @var int
     */
    protected int $duration;

    /**
     * Media minithumbnail; may be null
     *
     * @var Minithumbnail|null
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Media caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(
        int $width,
        int $height,
        int $duration,
        ?Minithumbnail $minithumbnail,
        FormattedText $caption
    ) {
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

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
