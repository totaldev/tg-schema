<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns name of a sticker set by its identifier.
 */
class GetStickerSetName extends TdFunction
{
    public const string TYPE_NAME = 'getStickerSetName';

    public function __construct(
        /**
         * Identifier of the sticker set.
         */
        protected int $setId
    ) {}

    public static function fromArray(array $array): GetStickerSetName
    {
        return new static(
            setId: $array['set_id'],
        );
    }

    public function getSetId(): int
    {
        return $this->setId;
    }

    public function setSetId(int $value): static
    {
        $this->setId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'set_id' => $this->setId,
        ];
    }
}
