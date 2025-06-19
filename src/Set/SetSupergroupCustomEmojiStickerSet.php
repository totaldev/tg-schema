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
    public const TYPE_NAME = 'setSupergroupCustomEmojiStickerSet';

    public function __construct(
        /**
         * Identifier of the supergroup.
         */
        protected int $supergroupId,
        /**
         * New value of the custom emoji sticker set identifier for the supergroup. Use 0 to remove the custom emoji sticker set in the supergroup.
         */
        protected int $customEmojiStickerSetId
    ) {}

    public static function fromArray(array $array): SetSupergroupCustomEmojiStickerSet
    {
        return new static(
            $array['supergroup_id'],
            $array['custom_emoji_sticker_set_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'supergroup_id'               => $this->supergroupId,
            'custom_emoji_sticker_set_id' => $this->customEmojiStickerSetId,
        ];
    }
}
