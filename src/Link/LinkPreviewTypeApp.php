<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to an app at App Store or Google Play.
 */
class LinkPreviewTypeApp extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeApp';

    public function __construct(
        /**
         * Photo for the app.
         */
        protected Photo $photo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeApp
    {
        return new static(
            photo: TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function setPhoto(Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->jsonSerialize(),
        ];
    }
}
