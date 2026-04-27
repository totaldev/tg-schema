<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a cell of a table.
 */
class PageBlockTableCell extends TdObject
{
    public const string TYPE_NAME = 'pageBlockTableCell';

    public function __construct(
        /**
         * Horizontal cell content alignment.
         */
        protected PageBlockHorizontalAlignment $align,
        /**
         * The number of columns the cell spans.
         */
        protected int                          $colspan,
        /**
         * True, if it is a header cell.
         */
        protected bool                         $isHeader,
        /**
         * The number of rows the cell spans.
         */
        protected int                          $rowspan,
        /**
         * Cell text; may be null. If the text is null, then the cell must be invisible.
         */
        protected ?RichText                    $text,
        /**
         * Vertical cell content alignment.
         */
        protected PageBlockVerticalAlignment   $valign,
    ) {}

    public static function fromArray(array $array): PageBlockTableCell
    {
        return new static(
            align   : TdSchemaRegistry::fromArray($array['align']),
            colspan : $array['colspan'],
            isHeader: $array['is_header'],
            rowspan : $array['rowspan'],
            text    : (isset($array['text']) ? TdSchemaRegistry::fromArray($array['text']) : null),
            valign  : TdSchemaRegistry::fromArray($array['valign']),
        );
    }

    public function getAlign(): PageBlockHorizontalAlignment
    {
        return $this->align;
    }

    public function getColspan(): int
    {
        return $this->colspan;
    }

    public function getIsHeader(): bool
    {
        return $this->isHeader;
    }

    public function getRowspan(): int
    {
        return $this->rowspan;
    }

    public function getText(): ?RichText
    {
        return $this->text;
    }

    public function getValign(): PageBlockVerticalAlignment
    {
        return $this->valign;
    }

    public function setAlign(PageBlockHorizontalAlignment $value): static
    {
        $this->align = $value;

        return $this;
    }

    public function setColspan(int $value): static
    {
        $this->colspan = $value;

        return $this;
    }

    public function setIsHeader(bool $value): static
    {
        $this->isHeader = $value;

        return $this;
    }

    public function setRowspan(int $value): static
    {
        $this->rowspan = $value;

        return $this;
    }

    public function setText(?RichText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setValign(PageBlockVerticalAlignment $value): static
    {
        $this->valign = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'align'     => $this->align->jsonSerialize(),
            'colspan'   => $this->colspan,
            'is_header' => $this->isHeader,
            'rowspan'   => $this->rowspan,
            'text'      => (null !== $this->text ? $this->text->jsonSerialize() : null),
            'valign'    => $this->valign->jsonSerialize(),
        ];
    }
}
