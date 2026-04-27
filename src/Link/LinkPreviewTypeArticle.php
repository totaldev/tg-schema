<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a web site.
 */
class LinkPreviewTypeArticle extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeArticle';

    public function __construct(
        /**
         * Article's main photo; may be null.
         */
        protected ?Photo $photo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeArticle
    {
        return new static(
            photo: (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
        );
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function setPhoto(?Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
        ];
    }
}
