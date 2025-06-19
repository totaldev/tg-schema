<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a Web App.
 */
class LinkPreviewTypeWebApp extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeWebApp';

    public function __construct(
        /**
         * Web App photo; may be null if none.
         */
        protected ?Photo $photo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeWebApp
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
