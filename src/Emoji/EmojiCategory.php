<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an emoji category.
 */
class EmojiCategory extends TdObject
{
    public const string TYPE_NAME = 'emojiCategory';

    public function __construct(
        /**
         * Custom emoji sticker, which represents icon of the category.
         */
        protected Sticker             $icon,
        /**
         * True, if the category must be shown first when choosing a sticker for the start page.
         */
        protected bool                $isGreeting,
        /**
         * Name of the category.
         */
        protected string              $name,
        /**
         * Source of stickers for the emoji category.
         */
        protected EmojiCategorySource $source,
    ) {}

    public static function fromArray(array $array): EmojiCategory
    {
        return new static(
            icon      : TdSchemaRegistry::fromArray($array['icon']),
            isGreeting: $array['is_greeting'],
            name      : $array['name'],
            source    : TdSchemaRegistry::fromArray($array['source']),
        );
    }

    public function getIcon(): Sticker
    {
        return $this->icon;
    }

    public function getIsGreeting(): bool
    {
        return $this->isGreeting;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSource(): EmojiCategorySource
    {
        return $this->source;
    }

    public function setIcon(Sticker $value): static
    {
        $this->icon = $value;

        return $this;
    }

    public function setIsGreeting(bool $value): static
    {
        $this->isGreeting = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setSource(EmojiCategorySource $value): static
    {
        $this->source = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'icon'        => $this->icon->jsonSerialize(),
            'is_greeting' => $this->isGreeting,
            'name'        => $this->name,
            'source'      => $this->source->jsonSerialize(),
        ];
    }
}
