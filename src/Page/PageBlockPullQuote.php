<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A pull quote
 */
class PageBlockPullQuote extends PageBlock
{
    public const TYPE_NAME = 'pageBlockPullQuote';

    /**
     * Quote text
     *
     * @var RichText
     */
    protected RichText $text;

    /**
     * Quote credit
     *
     * @var RichText
     */
    protected RichText $credit;

    public function __construct(RichText $text, RichText $credit)
    {
        parent::__construct();

        $this->text = $text;
        $this->credit = $credit;
    }

    public static function fromArray(array $array): PageBlockPullQuote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            TdSchemaRegistry::fromArray($array['credit']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
            'credit' => $this->credit->typeSerialize(),
        ];
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getCredit(): RichText
    {
        return $this->credit;
    }
}
