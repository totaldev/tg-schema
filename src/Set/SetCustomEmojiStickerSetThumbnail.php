<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets a custom emoji sticker set thumbnail.
 */
class SetCustomEmojiStickerSetThumbnail extends TdFunction
{
    public const TYPE_NAME = 'setCustomEmojiStickerSetThumbnail';

    public function __construct(
        /**
         * Sticker set name. The sticker set must be owned by the current user.
         */
        protected string $name,
        /**
         * Identifier of the custom emoji from the sticker set, which will be set as sticker set thumbnail; pass 0 to remove the sticker set thumbnail.
         */
        protected int    $customEmojiId,
    ) {}

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
            '@type'           => static::TYPE_NAME,
            'name'            => $this->name,
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }
}
