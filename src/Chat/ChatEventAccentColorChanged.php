<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat accent color or background custom emoji were changed.
 */
class ChatEventAccentColorChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventAccentColorChanged';

    public function __construct(
        /**
         * Previous identifier of chat accent color.
         */
        protected int $oldAccentColorId,
        /**
         * Previous identifier of the custom emoji; 0 if none.
         */
        protected int $oldBackgroundCustomEmojiId,
        /**
         * New identifier of chat accent color.
         */
        protected int $newAccentColorId,
        /**
         * New identifier of the custom emoji; 0 if none.
         */
        protected int $newBackgroundCustomEmojiId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventAccentColorChanged
    {
        return new static(
            $array['old_accent_color_id'],
            $array['old_background_custom_emoji_id'],
            $array['new_accent_color_id'],
            $array['new_background_custom_emoji_id'],
        );
    }

    public function getNewAccentColorId(): int
    {
        return $this->newAccentColorId;
    }

    public function getNewBackgroundCustomEmojiId(): int
    {
        return $this->newBackgroundCustomEmojiId;
    }

    public function getOldAccentColorId(): int
    {
        return $this->oldAccentColorId;
    }

    public function getOldBackgroundCustomEmojiId(): int
    {
        return $this->oldBackgroundCustomEmojiId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'old_accent_color_id'            => $this->oldAccentColorId,
            'old_background_custom_emoji_id' => $this->oldBackgroundCustomEmojiId,
            'new_accent_color_id'            => $this->newAccentColorId,
            'new_background_custom_emoji_id' => $this->newBackgroundCustomEmojiId,
        ];
    }
}
