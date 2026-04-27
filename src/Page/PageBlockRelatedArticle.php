<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a related article.
 */
class PageBlockRelatedArticle extends TdObject
{
    public const string TYPE_NAME = 'pageBlockRelatedArticle';

    public function __construct(
        /**
         * Article author; may be empty.
         */
        protected string $author,
        /**
         * Article description; may be empty.
         */
        protected string $description,
        /**
         * Article photo; may be null.
         */
        protected ?Photo $photo,
        /**
         * Point in time (Unix timestamp) when the article was published; 0 if unknown.
         */
        protected int    $publishDate,
        /**
         * Article title; may be empty.
         */
        protected string $title,
        /**
         * Related article URL.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): PageBlockRelatedArticle
    {
        return new static(
            author     : $array['author'],
            description: $array['description'],
            photo      : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            publishDate: $array['publish_date'],
            title      : $array['title'],
            url        : $array['url'],
        );
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getPublishDate(): int
    {
        return $this->publishDate;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setAuthor(string $value): static
    {
        $this->author = $value;

        return $this;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setPhoto(?Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setPublishDate(int $value): static
    {
        $this->publishDate = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

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
            '@type'        => static::TYPE_NAME,
            'author'       => $this->author,
            'description'  => $this->description,
            'photo'        => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'publish_date' => $this->publishDate,
            'title'        => $this->title,
            'url'          => $this->url,
        ];
    }
}
