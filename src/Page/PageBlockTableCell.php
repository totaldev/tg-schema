<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a cell of a table
 */
class PageBlockTableCell extends TdObject
{
    public const TYPE_NAME = 'pageBlockTableCell';

    /**
     * Horizontal cell content alignment
     *
     * @var PageBlockHorizontalAlignment
     */
    protected PageBlockHorizontalAlignment $align;

    /**
     * The number of columns the cell spans
     *
     * @var int
     */
    protected int $colspan;

    /**
     * True, if it is a header cell
     *
     * @var bool
     */
    protected bool $isHeader;

    /**
     * The number of rows the cell spans
     *
     * @var int
     */
    protected int $rowspan;

    /**
     * Cell text; may be null. If the text is null, then the cell must be invisible
     *
     * @var RichText|null
     */
    protected ?RichText $text;

    /**
     * Vertical cell content alignment
     *
     * @var PageBlockVerticalAlignment
     */
    protected PageBlockVerticalAlignment $valign;

    public function __construct(
        ?RichText                    $text,
        bool                         $isHeader,
        int                          $colspan,
        int                          $rowspan,
        PageBlockHorizontalAlignment $align,
        PageBlockVerticalAlignment   $valign,
    )
    {
        $this->text = $text;
        $this->isHeader = $isHeader;
        $this->colspan = $colspan;
        $this->rowspan = $rowspan;
        $this->align = $align;
        $this->valign = $valign;
    }

    public static function fromArray(array $array): PageBlockTableCell
    {
        return new static(
            (isset($array['text']) ? TdSchemaRegistry::fromArray($array['text']) : null),
            $array['is_header'],
            $array['colspan'],
            $array['rowspan'],
            TdSchemaRegistry::fromArray($array['align']),
            TdSchemaRegistry::fromArray($array['valign']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => (isset($this->text) ? $this->text : null),
            'is_header' => $this->isHeader,
            'colspan' => $this->colspan,
            'rowspan' => $this->rowspan,
            'align' => $this->align->typeSerialize(),
            'valign' => $this->valign->typeSerialize(),
        ];
    }
}
