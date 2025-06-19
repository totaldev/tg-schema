<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the list of emojis corresponding to a sticker. The sticker must belong to a regular or custom emoji sticker set that is owned by the current user.
 */
class SetStickerEmojis extends TdFunction
{
    public const TYPE_NAME = 'setStickerEmojis';

    public function __construct(
        /**
         * Sticker.
         */
        protected InputFile $sticker,
        /**
         * New string with 1-20 emoji corresponding to the sticker.
         */
        protected string    $emojis
    ) {}

    public static function fromArray(array $array): SetStickerEmojis
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['emojis'],
        );
    }

    public function getEmojis(): string
    {
        return $this->emojis;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
            'emojis'  => $this->emojis,
        ];
    }
}
