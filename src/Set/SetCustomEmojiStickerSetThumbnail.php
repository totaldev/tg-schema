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
    public const string TYPE_NAME = 'setCustomEmojiStickerSetThumbnail';

    public function __construct(
        /**
         * Identifier of the custom emoji from the sticker set, which will be set as sticker set thumbnail; pass 0 to remove the sticker set thumbnail.
         */
        protected int    $customEmojiId,
        /**
         * Sticker set name. The sticker set must be owned by the current user.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): SetCustomEmojiStickerSetThumbnail
    {
        return new static(
            customEmojiId: $array['custom_emoji_id'],
            name         : $array['name'],
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

    public function setCustomEmojiId(int $value): static
    {
        $this->customEmojiId = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
            'name'            => $this->name,
        ];
    }
}
