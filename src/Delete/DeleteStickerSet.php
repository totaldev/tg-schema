<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Completely deletes a sticker set.
 */
class DeleteStickerSet extends TdFunction
{
    public const string TYPE_NAME = 'deleteStickerSet';

    public function __construct(
        /**
         * Sticker set name. The sticker set must be owned by the current user.
         */
        protected string $name
    ) {}

    public static function fromArray(array $array): DeleteStickerSet
    {
        return new static(
            name: $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
