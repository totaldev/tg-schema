<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Dice;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Animated stickers to be combined into a slot machine.
 */
class DiceStickersSlotMachine extends DiceStickers
{
    public const TYPE_NAME = 'diceStickersSlotMachine';

    public function __construct(
        /**
         * The animated sticker with the slot machine background. The background animation must start playing after all reel animations finish.
         */
        protected Sticker $background,
        /**
         * The animated sticker with the lever animation. The lever animation must play once in the initial dice state.
         */
        protected Sticker $lever,
        /**
         * The animated sticker with the left reel.
         */
        protected Sticker $leftReel,
        /**
         * The animated sticker with the center reel.
         */
        protected Sticker $centerReel,
        /**
         * The animated sticker with the right reel.
         */
        protected Sticker $rightReel,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DiceStickersSlotMachine
    {
        return new static(
            TdSchemaRegistry::fromArray($array['background']),
            TdSchemaRegistry::fromArray($array['lever']),
            TdSchemaRegistry::fromArray($array['left_reel']),
            TdSchemaRegistry::fromArray($array['center_reel']),
            TdSchemaRegistry::fromArray($array['right_reel']),
        );
    }

    public function getBackground(): Sticker
    {
        return $this->background;
    }

    public function getCenterReel(): Sticker
    {
        return $this->centerReel;
    }

    public function getLeftReel(): Sticker
    {
        return $this->leftReel;
    }

    public function getLever(): Sticker
    {
        return $this->lever;
    }

    public function getRightReel(): Sticker
    {
        return $this->rightReel;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'background'  => $this->background->typeSerialize(),
            'lever'       => $this->lever->typeSerialize(),
            'left_reel'   => $this->leftReel->typeSerialize(),
            'center_reel' => $this->centerReel->typeSerialize(),
            'right_reel'  => $this->rightReel->typeSerialize(),
        ];
    }
}
