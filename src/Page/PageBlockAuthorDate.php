<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The author and publishing date of a page.
 */
class PageBlockAuthorDate extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockAuthorDate';

    public function __construct(
        /**
         * Author.
         */
        protected RichText $author,
        /**
         * Point in time (Unix timestamp) when the article was published; 0 if unknown.
         */
        protected int      $publishDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockAuthorDate
    {
        return new static(
            author     : TdSchemaRegistry::fromArray($array['author']),
            publishDate: $array['publish_date'],
        );
    }

    public function getAuthor(): RichText
    {
        return $this->author;
    }

    public function getPublishDate(): int
    {
        return $this->publishDate;
    }

    public function setAuthor(RichText $value): static
    {
        $this->author = $value;

        return $this;
    }

    public function setPublishDate(int $value): static
    {
        $this->publishDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'author'       => $this->author->jsonSerialize(),
            'publish_date' => $this->publishDate,
        ];
    }
}
