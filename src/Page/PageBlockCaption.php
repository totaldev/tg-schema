<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a caption of another block.
 */
class PageBlockCaption extends TdObject
{
    public const TYPE_NAME = 'pageBlockCaption';

    public function __construct(
        /**
         * Content of the caption.
         */
        protected RichText $text,
        /**
         * Block credit (like HTML tag <cite>).
         */
        protected RichText $credit
    ) {}

    public static function fromArray(array $array): PageBlockCaption
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
