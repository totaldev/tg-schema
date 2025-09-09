<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Dice;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A regular animated sticker.
 */
class DiceStickersRegular extends DiceStickers
{
    public const TYPE_NAME = 'diceStickersRegular';

    public function __construct(
        /**
         * The animated sticker with the dice animation.
         */
        protected Sticker $sticker
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DiceStickersRegular
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }
}
