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
    public const TYPE_NAME = 'productInfo';

    public function __construct(
        /**
         * Product title.
         */
        protected string        $title,
        /**
         * Product description.
         */
        protected FormattedText $description,
        /**
         * Product photo; may be null.
         */
        protected ?Photo        $photo,
    ) {}

    public static function fromArray(array $array): ProductInfo
    {
        return new static(
            $array['title'],
            TdSchemaRegistry::fromArray($array['description']),
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'title'       => $this->title,
            'description' => $this->description->typeSerialize(),
            'photo'       => (isset($this->photo) ? $this->photo : null),
        ];
    }
}
