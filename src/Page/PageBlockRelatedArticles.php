<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Related articles
 */
class PageBlockRelatedArticles extends PageBlock
{
    public const TYPE_NAME = 'pageBlockRelatedArticles';

    /**
     * List of related articles
     *
     * @var PageBlockRelatedArticle[]
     */
    protected array $articles;

    /**
     * Block header
     *
     * @var RichText
     */
    protected RichText $header;

    public function __construct(RichText $header, array $articles)
    {
        parent::__construct();

        $this->header = $header;
        $this->articles = $articles;
    }

    public static function fromArray(array $array): PageBlockRelatedArticles
    {
        return new static(
            TdSchemaRegistry::fromArray($array['header']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['articles']),
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
            '@type' => static::TYPE_NAME,
            'header' => $this->header->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->articles),
        ];
    }
}
