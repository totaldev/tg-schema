<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a photo.
 */
class InlineQueryResultPhoto extends InlineQueryResult
{
    public const string TYPE_NAME = 'inlineQueryResultPhoto';

    public function __construct(
        /**
         * A short description of the result, if known.
         */
        protected string $description,
        /**
         * Unique identifier of the query result.
         */
        protected string $id,
        /**
         * Photo.
         */
        protected Photo  $photo,
        /**
         * Title of the result, if known.
         */
        protected string $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultPhoto
    {
        return new static(
            description: $array['description'],
            id         : $array['id'],
            photo      : TdSchemaRegistry::fromArray($array['photo']),
            title      : $array['title'],
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setPhoto(Photo $value): static
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
            'description' => $this->description,
            'id'          => $this->id,
            'photo'       => $this->photo->jsonSerialize(),
            'title'       => $this->title,
        ];
    }
}
