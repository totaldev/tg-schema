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
    public const string TYPE_NAME = 'pageBlockPhoto';

    public function __construct(
        /**
         * Photo caption.
         */
        protected PageBlockCaption $caption,
        /**
         * Photo file; may be null.
         */
        protected ?Photo           $photo,
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
            caption: TdSchemaRegistry::fromArray($array['caption']),
            photo  : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            url    : $array['url'],
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

    public function setCaption(PageBlockCaption $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setPhoto(?Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'caption' => $this->caption->jsonSerialize(),
            'photo'   => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'url'     => $this->url,
        ];
    }
}
