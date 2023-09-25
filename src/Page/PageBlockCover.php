<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A page cover
 */
class PageBlockCover extends PageBlock
{
    public const TYPE_NAME = 'pageBlockCover';

    /**
     * Cover
     *
     * @var PageBlock
     */
    protected PageBlock $cover;

    public function __construct(PageBlock $cover)
    {
        parent::__construct();

        $this->cover = $cover;
    }

    public static function fromArray(array $array): PageBlockCover
    {
        return new static(
            TdSchemaRegistry::fromArray($array['cover']),
        );
    }

    public function getCover(): PageBlock
    {
        return $this->cover;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'cover' => $this->cover->typeSerialize(),
        ];
    }
}
