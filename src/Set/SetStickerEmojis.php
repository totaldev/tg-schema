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
    public const string TYPE_NAME = 'setStickerEmojis';

    public function __construct(
        /**
         * New string with 1-20 emoji corresponding to the sticker.
         */
        protected string    $emojis,
        /**
         * Sticker.
         */
        protected InputFile $sticker,
    ) {}

    public static function fromArray(array $array): SetStickerEmojis
    {
        return new static(
            emojis : $array['emojis'],
            sticker: TdSchemaRegistry::fromArray($array['sticker']),
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

    public function setEmojis(string $value): static
    {
        $this->emojis = $value;

        return $this;
    }

    public function setSticker(InputFile $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'emojis'  => $this->emojis,
            'sticker' => $this->sticker->jsonSerialize(),
        ];
    }
}
