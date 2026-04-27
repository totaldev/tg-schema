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
    public const string TYPE_NAME = 'pageBlockCaption';

    public function __construct(
        /**
         * Block credit (like HTML tag <cite>).
         */
        protected RichText $credit,
        /**
         * Content of the caption.
         */
        protected RichText $text,
    ) {}

    public static function fromArray(array $array): PageBlockCaption
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
