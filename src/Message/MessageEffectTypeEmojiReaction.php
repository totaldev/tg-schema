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
    public const string TYPE_NAME = 'messageEffectTypeEmojiReaction';

    public function __construct(
        /**
         * Effect animation for the effect in TGS format.
         */
        protected Sticker $effectAnimation,
        /**
         * Select animation for the effect in TGS format.
         */
        protected Sticker $selectAnimation,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageEffectTypeEmojiReaction
    {
        return new static(
            effectAnimation: TdSchemaRegistry::fromArray($array['effect_animation']),
            selectAnimation: TdSchemaRegistry::fromArray($array['select_animation']),
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

    public function setEffectAnimation(Sticker $value): static
    {
        $this->effectAnimation = $value;

        return $this;
    }

    public function setSelectAnimation(Sticker $value): static
    {
        $this->selectAnimation = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'effect_animation' => $this->effectAnimation->jsonSerialize(),
            'select_animation' => $this->selectAnimation->jsonSerialize(),
        ];
    }
}
