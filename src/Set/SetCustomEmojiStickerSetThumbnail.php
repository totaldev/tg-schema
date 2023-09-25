<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets a custom emoji sticker set thumbnail; for bots only
 */
class SetCustomEmojiStickerSetThumbnail extends TdFunction
{
    public const TYPE_NAME = 'setCustomEmojiStickerSetThumbnail';

    /**
     * Identifier of the custom emoji from the sticker set, which will be set as sticker set thumbnail; pass 0 to remove the sticker set thumbnail
     *
     * @var int
     */
    protected int $customEmojiId;

    /**
     * Sticker set name
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name, int $customEmojiId)
    {
        $this->name = $name;
        $this->customEmojiId = $customEmojiId;
    }

    public static function fromArray(array $array): SetCustomEmojiStickerSetThumbnail
    {
        return new static(
            $array['name'],
            $array['custom_emoji_id'],
        );
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
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
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }
}
