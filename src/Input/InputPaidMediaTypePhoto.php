<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The media is a photo. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be
 * at most 20.
 */
class InputPaidMediaTypePhoto extends InputPaidMediaType
{
    public const string TYPE_NAME = 'inputPaidMediaTypePhoto';

    public function __construct(
        /**
         * Video of the live photo; pass null if the photo isn't a live photo.
         */
        protected ?InputFile $video = null
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPaidMediaTypePhoto
    {
        return new static(
            video: (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
        );
    }

    public function getVideo(): ?InputFile
    {
        return $this->video;
    }

    public function setVideo(?InputFile $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'video' => (null !== $this->video ? $this->video->jsonSerialize() : null),
        ];
    }
}
