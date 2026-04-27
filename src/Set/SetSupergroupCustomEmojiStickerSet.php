<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the custom emoji sticker set of a supergroup; requires can_change_info administrator right. The chat must have at least
 * chatBoostFeatures.min_custom_emoji_sticker_set_boost_level boost level to pass the corresponding color.
 */
class SetSupergroupCustomEmojiStickerSet extends TdFunction
{
    public const string TYPE_NAME = 'setSupergroupCustomEmojiStickerSet';

    public function __construct(
        /**
         * New value of the custom emoji sticker set identifier for the supergroup. Use 0 to remove the custom emoji sticker set in the supergroup.
         */
        protected int $customEmojiStickerSetId,
        /**
         * Identifier of the supergroup.
         */
        protected int $supergroupId,
    ) {}

    public static function fromArray(array $array): SetSupergroupCustomEmojiStickerSet
    {
        return new static(
            customEmojiStickerSetId: $array['custom_emoji_sticker_set_id'],
            supergroupId           : $array['supergroup_id'],
        );
    }

    public function getCustomEmojiStickerSetId(): int
    {
        return $this->customEmojiStickerSetId;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setCustomEmojiStickerSetId(int $value): static
    {
        $this->customEmojiStickerSetId = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'custom_emoji_sticker_set_id' => $this->customEmojiStickerSetId,
            'supergroup_id'               => $this->supergroupId,
        ];
    }
}
