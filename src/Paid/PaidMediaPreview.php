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
    public const TYPE_NAME = 'paidMediaPreview';

    public function __construct(
        /**
         * Media width; 0 if unknown.
         */
        protected int            $width,
        /**
         * Media height; 0 if unknown.
         */
        protected int            $height,
        /**
         * Media duration, in seconds; 0 if unknown.
         */
        protected int            $duration,
        /**
         * Media minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaidMediaPreview
    {
        return new static(
            $array['width'],
            $array['height'],
            $array['duration'],
            isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'width'         => $this->width,
            'height'        => $this->height,
            'duration'      => $this->duration,
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
        ];
    }
}
