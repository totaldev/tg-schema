<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an effect added to a message.
 */
class MessageEffect extends TdObject
{
    public const TYPE_NAME = 'messageEffect';

    public function __construct(
        /**
         * Unique identifier of the effect.
         */
        protected int               $id,
        /**
         * Static icon for the effect in WEBP format; may be null if none.
         */
        protected ?Sticker          $staticIcon,
        /**
         * Emoji corresponding to the effect that can be used if static icon isn't available.
         */
        protected string            $emoji,
        /**
         * True, if Telegram Premium subscription is required to use the effect.
         */
        protected bool              $isPremium,
        /**
         * Type of the effect.
         */
        protected MessageEffectType $type,
    ) {}

    public static function fromArray(array $array): MessageEffect
    {
        return new static(
            $array['id'],
            isset($array['static_icon']) ? TdSchemaRegistry::fromArray($array['static_icon']) : null,
            $array['emoji'],
            $array['is_premium'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getStaticIcon(): ?Sticker
    {
        return $this->staticIcon;
    }

    public function getType(): MessageEffectType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'static_icon' => $this->staticIcon ?? null,
            'emoji'       => $this->emoji,
            'is_premium'  => $this->isPremium,
            'type'        => $this->type->typeSerialize(),
        ];
    }
}
