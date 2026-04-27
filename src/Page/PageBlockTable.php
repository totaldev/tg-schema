<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A table.
 */
class PageBlockTable extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockTable';

    public function __construct(
        /**
         * Table caption.
         */
        protected RichText $caption,
        /**
         * Table cells.
         *
         * @var PageBlockTableCell[][]
         */
        protected array    $cells,
        /**
         * True, if the table is bordered.
         */
        protected bool     $isBordered,
        /**
         * True, if the table is striped.
         */
        protected bool     $isStriped,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockTable
    {
        return new static(
            caption   : TdSchemaRegistry::fromArray($array['caption']),
            cells     : array_map(static fn($x) => array_map(static fn($y) => TdSchemaRegistry::fromArray($y), $x), $array['cells']),
            isBordered: $array['is_bordered'],
            isStriped : $array['is_striped'],
        );
    }

    public function getCaption(): RichText
    {
        return $this->caption;
    }

    public function getCells(): array
    {
        return $this->cells;
    }

    public function getIsBordered(): bool
    {
        return $this->isBordered;
    }

    public function getIsStriped(): bool
    {
        return $this->isStriped;
    }

    public function setCaption(RichText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setCells(array $value): static
    {
        $this->cells = $value;

        return $this;
    }

    public function setIsBordered(bool $value): static
    {
        $this->isBordered = $value;

        return $this;
    }

    public function setIsStriped(bool $value): static
    {
        $this->isStriped = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'caption'     => $this->caption->jsonSerialize(),
            'cells'       => array_map(static fn($x) => array_map(static fn($y) => $y->jsonSerialize(), $x), $this->cells),
            'is_bordered' => $this->isBordered,
            'is_striped'  => $this->isStriped,
        ];
    }
}
