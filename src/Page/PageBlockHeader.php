<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A header.
 */
class PageBlockHeader extends PageBlock
{
    public const TYPE_NAME = 'pageBlockHeader';

    public function __construct(
        /**
         * Header.
         */
        protected RichText $header
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockHeader
    {
        return new static(
            TdSchemaRegistry::fromArray($array['header']),
        );
    }

    public function getHeader(): RichText
    {
        return $this->header;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'header' => $this->header->typeSerialize(),
        ];
    }
}
