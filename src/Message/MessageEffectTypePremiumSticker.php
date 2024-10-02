<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An effect from a premium sticker.
 */
class MessageEffectTypePremiumSticker extends MessageEffectType
{
    public const TYPE_NAME = 'messageEffectTypePremiumSticker';

    public function __construct(
        /**
         * The premium sticker. The effect can be found at sticker.full_type.premium_animation.
         */
        protected Sticker $sticker
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageEffectTypePremiumSticker
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
