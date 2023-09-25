<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The title of a page
 */
class PageBlockTitle extends PageBlock
{
    public const TYPE_NAME = 'pageBlockTitle';

    /**
     * Title
     *
     * @var RichText
     */
    protected RichText $title;

    public function __construct(RichText $title)
    {
        parent::__construct();

        $this->title = $title;
    }

    public static function fromArray(array $array): PageBlockTitle
    {
        return new static(
            TdSchemaRegistry::fromArray($array['title']),
        );
    }

    public function getTitle(): RichText
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title->typeSerialize(),
        ];
    }
}
