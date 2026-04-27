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
    public const string TYPE_NAME = 'messageSticker';

    public function __construct(
        /**
         * True, if premium animation of the sticker must be played.
         */
        protected bool    $isPremium,
        /**
         * The sticker description.
         */
        protected Sticker $sticker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSticker
    {
        return new static(
            isPremium: $array['is_premium'],
            sticker  : TdSchemaRegistry::fromArray($array['sticker']),
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

    public function setIsPremium(bool $value): static
    {
        $this->isPremium = $value;

        return $this;
    }

    public function setSticker(Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_premium' => $this->isPremium,
            'sticker'    => $this->sticker->jsonSerialize(),
        ];
    }
}
