<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Stickers;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of stickers.
 */
class Stickers extends TdObject
{
    public const TYPE_NAME = 'stickers';

    public function __construct(
        /**
         * List of stickers.
         *
         * @var Sticker[]
         */
        protected array $stickers
    ) {}

    public static function fromArray(array $array): Stickers
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
        );
    }

    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->stickers),
        ];
    }
}
