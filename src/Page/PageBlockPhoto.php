<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A photo.
 */
class PageBlockPhoto extends PageBlock
{
    public const TYPE_NAME = 'pageBlockPhoto';

    public function __construct(
        /**
         * Photo file; may be null.
         */
        protected ?Photo           $photo,
        /**
         * Photo caption.
         */
        protected PageBlockCaption $caption,
        /**
         * URL that needs to be opened when the photo is clicked.
         */
        protected string           $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockPhoto
    {
        return new static(
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            TdSchemaRegistry::fromArray($array['caption']),
            $array['url'],
        );
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'photo'   => (isset($this->photo) ? $this->photo : null),
            'caption' => $this->caption->typeSerialize(),
            'url'     => $this->url,
        ];
    }
}
