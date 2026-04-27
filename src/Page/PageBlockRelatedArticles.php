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
    public const string TYPE_NAME = 'pageBlockRelatedArticles';

    public function __construct(
        /**
         * List of related articles.
         *
         * @var PageBlockRelatedArticle[]
         */
        protected array    $articles,
        /**
         * Block header.
         */
        protected RichText $header,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockRelatedArticles
    {
        return new static(
            articles: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['articles']),
            header  : TdSchemaRegistry::fromArray($array['header']),
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

    public function setArticles(array $value): static
    {
        $this->articles = $value;

        return $this;
    }

    public function setHeader(RichText $value): static
    {
        $this->header = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'articles' => array_map(static fn($x) => $x->jsonSerialize(), $this->articles),
            'header'   => $this->header->jsonSerialize(),
        ];
    }
}
