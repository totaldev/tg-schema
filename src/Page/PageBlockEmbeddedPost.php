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
    public const TYPE_NAME = 'pageBlockEmbeddedPost';

    public function __construct(
        /**
         * URL of the embedded post.
         */
        protected string           $url,
        /**
         * Post author.
         */
        protected string           $author,
        /**
         * Post author photo; may be null.
         */
        protected ?Photo           $authorPhoto,
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
         * Post caption.
         */
        protected PageBlockCaption $caption,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockEmbeddedPost
    {
        return new static(
            $array['url'],
            $array['author'],
            isset($array['author_photo']) ? TdSchemaRegistry::fromArray($array['author_photo']) : null,
            $array['date'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
            TdSchemaRegistry::fromArray($array['caption']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'url'          => $this->url,
            'author'       => $this->author,
            'author_photo' => $this->authorPhoto ?? null,
            'date'         => $this->date,
            'page_blocks'  => array_map(static fn($x) => $x->typeSerialize(), $this->pageBlocks),
            'caption'      => $this->caption->typeSerialize(),
        ];
    }
}
