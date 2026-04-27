<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The media is hidden until the invoice is paid.
 */
class PaidMediaPreview extends PaidMedia
{
    public const string TYPE_NAME = 'paidMediaPreview';

    public function __construct(
        /**
         * Media duration, in seconds; 0 if unknown.
         */
        protected int            $duration,
        /**
         * Media height; 0 if unknown.
         */
        protected int            $height,
        /**
         * Media minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * Media width; 0 if unknown.
         */
        protected int            $width,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaidMediaPreview
    {
        return new static(
            duration     : $array['duration'],
            height       : $array['height'],
            minithumbnail: (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            width        : $array['width'],
        );
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

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setMinithumbnail(?Minithumbnail $value): static
    {
        $this->minithumbnail = $value;

        return $this;
    }

    public function setWidth(int $value): static
    {
        $this->width = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'duration'      => $this->duration,
            'height'        => $this->height,
            'minithumbnail' => (null !== $this->minithumbnail ? $this->minithumbnail->jsonSerialize() : null),
            'width'         => $this->width,
        ];
    }
}
