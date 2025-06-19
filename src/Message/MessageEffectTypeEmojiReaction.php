<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An effect from an emoji reaction.
 */
class MessageEffectTypeEmojiReaction extends MessageEffectType
{
    public const TYPE_NAME = 'messageEffectTypeEmojiReaction';

    public function __construct(
        /**
         * Select animation for the effect in TGS format.
         */
        protected Sticker $selectAnimation,
        /**
         * Effect animation for the effect in TGS format.
         */
        protected Sticker $effectAnimation
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageEffectTypeEmojiReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['select_animation']),
            TdSchemaRegistry::fromArray($array['effect_animation']),
        );
    }

    public function getEffectAnimation(): Sticker
    {
        return $this->effectAnimation;
    }

    public function getSelectAnimation(): Sticker
    {
        return $this->selectAnimation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'select_animation' => $this->selectAnimation->typeSerialize(),
            'effect_animation' => $this->effectAnimation->typeSerialize(),
        ];
    }
}
