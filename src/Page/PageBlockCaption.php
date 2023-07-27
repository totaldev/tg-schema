<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a caption of an instant view web page block, consisting of a text and a trailing credit
 */
class PageBlockCaption extends TdObject
{
    public const TYPE_NAME = 'pageBlockCaption';

    /**
     * Content of the caption
     *
     * @var RichText
     */
    protected RichText $text;

    /**
     * Block credit (like HTML tag <cite>)
     *
     * @var RichText
     */
    protected RichText $credit;

    public function __construct(RichText $text, RichText $credit)
    {
        $this->text = $text;
        $this->credit = $credit;
    }

    public static function fromArray(array $array): PageBlockCaption
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
