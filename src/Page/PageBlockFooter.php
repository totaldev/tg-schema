<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The footer of a page.
 */
class PageBlockFooter extends PageBlock
{
    public const TYPE_NAME = 'pageBlockFooter';

    public function __construct(
        /**
         * Footer.
         */
        protected RichText $footer
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockFooter
    {
        return new static(
            TdSchemaRegistry::fromArray($array['footer']),
        );
    }

    public function getFooter(): RichText
    {
        return $this->footer;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'footer' => $this->footer->typeSerialize(),
        ];
    }
}
