<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of similar emoji to search for in getStickers and searchStickers
 */
class EmojiCategory extends TdObject
{
    public const TYPE_NAME = 'emojiCategory';

    /**
     * List of emojis in the category
     *
     * @var string[]
     */
    protected array $emojis;

    /**
     * Custom emoji sticker, which represents icon of the category
     *
     * @var Sticker
     */
    protected Sticker $icon;

    /**
     * Name of the category
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name, Sticker $icon, array $emojis)
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->emojis = $emojis;
    }

    public static function fromArray(array $array): EmojiCategory
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['icon']),
            $array['emojis'],
        );
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function getIcon(): Sticker
    {
        return $this->icon;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
            'icon' => $this->icon->typeSerialize(),
            'emojis' => $this->emojis,
        ];
    }
}
