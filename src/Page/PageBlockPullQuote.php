<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A pull quote.
 */
class PageBlockPullQuote extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockPullQuote';

    public function __construct(
        /**
         * Quote credit.
         */
        protected RichText $credit,
        /**
         * Quote text.
         */
        protected RichText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockPullQuote
    {
        return new static(
            credit: TdSchemaRegistry::fromArray($array['credit']),
            text  : TdSchemaRegistry::fromArray($array['text']),
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

    public function setCredit(RichText $value): static
    {
        $this->credit = $value;

        return $this;
    }

    public function setText(RichText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'credit' => $this->credit->jsonSerialize(),
            'text'   => $this->text->jsonSerialize(),
        ];
    }
}
