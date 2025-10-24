<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A subheader.
 */
class PageBlockSubheader extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockSubheader';

    public function __construct(
        /**
         * Subheader.
         */
        protected RichText $subheader
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockSubheader
    {
        return new static(
            TdSchemaRegistry::fromArray($array['subheader']),
        );
    }

    public function getSubheader(): RichText
    {
        return $this->subheader;
    }

    public function setSubheader(RichText $value): static
    {
        $this->subheader = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'subheader' => $this->subheader->typeSerialize(),
        ];
    }
}
