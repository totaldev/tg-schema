<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A page cover.
 */
class PageBlockCover extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockCover';

    public function __construct(
        /**
         * Cover.
         */
        protected PageBlock $cover
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockCover
    {
        return new static(
            cover: TdSchemaRegistry::fromArray($array['cover']),
        );
    }

    public function getCover(): PageBlock
    {
        return $this->cover;
    }

    public function setCover(PageBlock $value): static
    {
        $this->cover = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'cover' => $this->cover->jsonSerialize(),
        ];
    }
}
