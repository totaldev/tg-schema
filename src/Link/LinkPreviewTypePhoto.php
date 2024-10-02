<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a photo.
 */
class LinkPreviewTypePhoto extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypePhoto';

    public function __construct(
        /**
         * The photo.
         */
        protected Photo $photo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
        ];
    }
}
