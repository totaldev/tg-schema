<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A block quote.
 */
class PageBlockBlockQuote extends PageBlock
{
    public const TYPE_NAME = 'pageBlockBlockQuote';

    public function __construct(
        /**
         * Quote text.
         */
        protected RichText $text,
        /**
         * Quote credit.
         */
        protected RichText $credit,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockBlockQuote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            TdSchemaRegistry::fromArray($array['credit']),
        );
    }

    public function getCredit(): RichText
    {
        return $this->credit;
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'text'   => $this->text->typeSerialize(),
            'credit' => $this->credit->typeSerialize(),
        ];
    }
}
