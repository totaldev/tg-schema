<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Product;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a product that can be paid with invoice.
 */
class ProductInfo extends TdObject
{
    public const string TYPE_NAME = 'productInfo';

    public function __construct(
        /**
         * Product description.
         */
        protected FormattedText $description,
        /**
         * Product photo; may be null.
         */
        protected ?Photo        $photo,
        /**
         * Product title.
         */
        protected string        $title,
    ) {}

    public static function fromArray(array $array): ProductInfo
    {
        return new static(
            description: TdSchemaRegistry::fromArray($array['description']),
            photo      : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            title      : $array['title'],
        );
    }

    public function getDescription(): FormattedText
    {
        return $this->description;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(FormattedText $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setPhoto(?Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'description' => $this->description->jsonSerialize(),
            'photo'       => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'title'       => $this->title,
        ];
    }
}
