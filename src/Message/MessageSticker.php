<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A sticker message.
 */
class MessageSticker extends MessageContent
{
    public const TYPE_NAME = 'messageSticker';

    public function __construct(
        /**
         * The sticker description.
         */
        protected Sticker $sticker,
        /**
         * True, if premium animation of the sticker must be played.
         */
        protected bool    $isPremium,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['is_premium'],
        );
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'sticker'    => $this->sticker->typeSerialize(),
            'is_premium' => $this->isPremium,
        ];
    }
}
