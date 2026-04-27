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
    public const string TYPE_NAME = 'messageEffect';

    public function __construct(
        /**
         * Emoji corresponding to the effect that can be used if static icon isn't available.
         */
        protected string            $emoji,
        /**
         * Unique identifier of the effect.
         */
        protected int               $id,
        /**
         * True, if Telegram Premium subscription is required to use the effect.
         */
        protected bool              $isPremium,
        /**
         * Static icon for the effect in WEBP format; may be null if none.
         */
        protected ?Sticker          $staticIcon,
        /**
         * Type of the effect.
         */
        protected MessageEffectType $type,
    ) {}

    public static function fromArray(array $array): MessageEffect
    {
        return new static(
            emoji     : $array['emoji'],
            id        : $array['id'],
            isPremium : $array['is_premium'],
            staticIcon: (isset($array['static_icon']) ? TdSchemaRegistry::fromArray($array['static_icon']) : null),
            type      : TdSchemaRegistry::fromArray($array['type']),
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

    public function setEmoji(string $value): static
    {
        $this->emoji = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsPremium(bool $value): static
    {
        $this->isPremium = $value;

        return $this;
    }

    public function setStaticIcon(?Sticker $value): static
    {
        $this->staticIcon = $value;

        return $this;
    }

    public function setType(MessageEffectType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'emoji'       => $this->emoji,
            'id'          => $this->id,
            'is_premium'  => $this->isPremium,
            'static_icon' => (null !== $this->staticIcon ? $this->staticIcon->jsonSerialize() : null),
            'type'        => $this->type->jsonSerialize(),
        ];
    }
}
