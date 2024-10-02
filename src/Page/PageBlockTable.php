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
    public const TYPE_NAME = 'pageBlockTable';

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
            TdSchemaRegistry::fromArray($array['caption']),
            array_map(fn($x) => array_map(fn($y) => TdSchemaRegistry::fromArray($y), $x), $array['cells']),
            $array['is_bordered'],
            $array['is_striped'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'caption'     => $this->caption->typeSerialize(),
            array_map(fn($x) => array_map(fn($y) => $y->typeSerialize(), $x), $this->cells),
            'is_bordered' => $this->isBordered,
            'is_striped'  => $this->isStriped,
        ];
    }
}
