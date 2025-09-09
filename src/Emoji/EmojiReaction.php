<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an emoji reaction.
 */
class EmojiReaction extends TdObject
{
    public const TYPE_NAME = 'emojiReaction';

    public function __construct(
        /**
         * Text representation of the reaction.
         */
        protected string   $emoji,
        /**
         * Reaction title.
         */
        protected string   $title,
        /**
         * True, if the reaction can be added to new messages and enabled in chats.
         */
        protected bool     $isActive,
        /**
         * Static icon for the reaction.
         */
        protected Sticker  $staticIcon,
        /**
         * Appear animation for the reaction.
         */
        protected Sticker  $appearAnimation,
        /**
         * Select animation for the reaction.
         */
        protected Sticker  $selectAnimation,
        /**
         * Activate animation for the reaction.
         */
        protected Sticker  $activateAnimation,
        /**
         * Effect animation for the reaction.
         */
        protected Sticker  $effectAnimation,
        /**
         * Around animation for the reaction; may be null.
         */
        protected ?Sticker $aroundAnimation,
        /**
         * Center animation for the reaction; may be null.
         */
        protected ?Sticker $centerAnimation,
    ) {}

    public static function fromArray(array $array): EmojiReaction
    {
        return new static(
            $array['emoji'],
            $array['title'],
            $array['is_active'],
            TdSchemaRegistry::fromArray($array['static_icon']),
            TdSchemaRegistry::fromArray($array['appear_animation']),
            TdSchemaRegistry::fromArray($array['select_animation']),
            TdSchemaRegistry::fromArray($array['activate_animation']),
            TdSchemaRegistry::fromArray($array['effect_animation']),
            isset($array['around_animation']) ? TdSchemaRegistry::fromArray($array['around_animation']) : null,
            isset($array['center_animation']) ? TdSchemaRegistry::fromArray($array['center_animation']) : null,
        );
    }

    public function getActivateAnimation(): Sticker
    {
        return $this->activateAnimation;
    }

    public function getAppearAnimation(): Sticker
    {
        return $this->appearAnimation;
    }

    public function getAroundAnimation(): ?Sticker
    {
        return $this->aroundAnimation;
    }

    public function getCenterAnimation(): ?Sticker
    {
        return $this->centerAnimation;
    }

    public function getEffectAnimation(): Sticker
    {
        return $this->effectAnimation;
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function getSelectAnimation(): Sticker
    {
        return $this->selectAnimation;
    }

    public function getStaticIcon(): Sticker
    {
        return $this->staticIcon;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'emoji'              => $this->emoji,
            'title'              => $this->title,
            'is_active'          => $this->isActive,
            'static_icon'        => $this->staticIcon->typeSerialize(),
            'appear_animation'   => $this->appearAnimation->typeSerialize(),
            'select_animation'   => $this->selectAnimation->typeSerialize(),
            'activate_animation' => $this->activateAnimation->typeSerialize(),
            'effect_animation'   => $this->effectAnimation->typeSerialize(),
            'around_animation'   => $this->aroundAnimation ?? null,
            'center_animation'   => $this->centerAnimation ?? null,
        ];
    }
}
