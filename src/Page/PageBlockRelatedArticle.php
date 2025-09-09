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
    public const TYPE_NAME = 'pageBlockRelatedArticle';

    public function __construct(
        /**
         * Related article URL.
         */
        protected string $url,
        /**
         * Article title; may be empty.
         */
        protected string $title,
        /**
         * Article description; may be empty.
         */
        protected string $description,
        /**
         * Article photo; may be null.
         */
        protected ?Photo $photo,
        /**
         * Article author; may be empty.
         */
        protected string $author,
        /**
         * Point in time (Unix timestamp) when the article was published; 0 if unknown.
         */
        protected int    $publishDate,
    ) {}

    public static function fromArray(array $array): PageBlockRelatedArticle
    {
        return new static(
            $array['url'],
            $array['title'],
            $array['description'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['author'],
            $array['publish_date'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'url'          => $this->url,
            'title'        => $this->title,
            'description'  => $this->description,
            'photo'        => $this->photo ?? null,
            'author'       => $this->author,
            'publish_date' => $this->publishDate,
        ];
    }
}
