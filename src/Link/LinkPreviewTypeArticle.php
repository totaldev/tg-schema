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
    public const TYPE_NAME = 'linkPreviewTypeArticle';

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
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
        );
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (isset($this->photo) ? $this->photo : null),
        ];
    }
}
