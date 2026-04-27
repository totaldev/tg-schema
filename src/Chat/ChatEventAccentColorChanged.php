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
    public const string TYPE_NAME = 'chatEventAccentColorChanged';

    public function __construct(
        /**
         * New identifier of chat accent color.
         */
        protected int $newAccentColorId,
        /**
         * New identifier of the custom emoji; 0 if none.
         */
        protected int $newBackgroundCustomEmojiId,
        /**
         * Previous identifier of chat accent color.
         */
        protected int $oldAccentColorId,
        /**
         * Previous identifier of the custom emoji; 0 if none.
         */
        protected int $oldBackgroundCustomEmojiId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventAccentColorChanged
    {
        return new static(
            newAccentColorId          : $array['new_accent_color_id'],
            newBackgroundCustomEmojiId: $array['new_background_custom_emoji_id'],
            oldAccentColorId          : $array['old_accent_color_id'],
            oldBackgroundCustomEmojiId: $array['old_background_custom_emoji_id'],
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

    public function setNewAccentColorId(int $value): static
    {
        $this->newAccentColorId = $value;

        return $this;
    }

    public function setNewBackgroundCustomEmojiId(int $value): static
    {
        $this->newBackgroundCustomEmojiId = $value;

        return $this;
    }

    public function setOldAccentColorId(int $value): static
    {
        $this->oldAccentColorId = $value;

        return $this;
    }

    public function setOldBackgroundCustomEmojiId(int $value): static
    {
        $this->oldBackgroundCustomEmojiId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'new_accent_color_id'            => $this->newAccentColorId,
            'new_background_custom_emoji_id' => $this->newBackgroundCustomEmojiId,
            'old_accent_color_id'            => $this->oldAccentColorId,
            'old_background_custom_emoji_id' => $this->oldBackgroundCustomEmojiId,
        ];
    }
}
