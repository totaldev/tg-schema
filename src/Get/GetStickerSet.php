<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a sticker set by its identifier.
 */
class GetStickerSet extends TdFunction
{
    public const TYPE_NAME = 'getStickerSet';

    public function __construct(
        /**
         * Identifier of the sticker set.
         */
        protected int $setId
    ) {}

    public static function fromArray(array $array): GetStickerSet
    {
        return new static(
            $array['set_id'],
        );
    }

    public function getSetId(): int
    {
        return $this->setId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'set_id' => $this->setId,
        ];
    }
}
