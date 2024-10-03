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
    public const TYPE_NAME = 'inlineQueryResultPhoto';

    public function __construct(
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
        /**
         * A short description of the result, if known.
         */
        protected string $description,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultPhoto
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['photo']),
            $array['title'],
            $array['description'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'photo'       => $this->photo->typeSerialize(),
            'title'       => $this->title,
            'description' => $this->description,
        ];
    }
}
