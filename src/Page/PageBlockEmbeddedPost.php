<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An embedded post.
 */
class PageBlockEmbeddedPost extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockEmbeddedPost';

    public function __construct(
        /**
         * Post author.
         */
        protected string           $author,
        /**
         * Post author photo; may be null.
         */
        protected ?Photo           $authorPhoto,
        /**
         * Post caption.
         */
        protected PageBlockCaption $caption,
        /**
         * Point in time (Unix timestamp) when the post was created; 0 if unknown.
         */
        protected int              $date,
        /**
         * Post content.
         *
         * @var PageBlock[]
         */
        protected array            $pageBlocks,
        /**
         * URL of the embedded post.
         */
        protected string           $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockEmbeddedPost
    {
        return new static(
            author     : $array['author'],
            authorPhoto: (isset($array['author_photo']) ? TdSchemaRegistry::fromArray($array['author_photo']) : null),
            caption    : TdSchemaRegistry::fromArray($array['caption']),
            date       : $array['date'],
            pageBlocks : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
            url        : $array['url'],
        );
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getAuthorPhoto(): ?Photo
    {
        return $this->authorPhoto;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
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

    public function setAuthorPhoto(?Photo $value): static
    {
        $this->authorPhoto = $value;

        return $this;
    }

    public function setCaption(PageBlockCaption $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setPageBlocks(array $value): static
    {
        $this->pageBlocks = $value;

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
            'author_photo' => (null !== $this->authorPhoto ? $this->authorPhoto->jsonSerialize() : null),
            'caption'      => $this->caption->jsonSerialize(),
            'date'         => $this->date,
            'page_blocks'  => array_map(static fn($x) => $x->jsonSerialize(), $this->pageBlocks),
            'url'          => $this->url,
        ];
    }
}
