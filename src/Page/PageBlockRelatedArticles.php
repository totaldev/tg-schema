<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Related articles.
 */
class PageBlockRelatedArticles extends PageBlock
{
    public const TYPE_NAME = 'pageBlockRelatedArticles';

    public function __construct(
        /**
         * Block header.
         */
        protected RichText $header,
        /**
         * List of related articles.
         *
         * @var PageBlockRelatedArticle[]
         */
        protected array    $articles
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockRelatedArticles
    {
        return new static(
            TdSchemaRegistry::fromArray($array['header']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['articles']),
        );
    }

    public function getArticles(): array
    {
        return $this->articles;
    }

    public function getHeader(): RichText
    {
        return $this->header;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'header'   => $this->header->typeSerialize(),
            'articles' => array_map(static fn($x) => $x->typeSerialize(), $this->articles),
        ];
    }
}
