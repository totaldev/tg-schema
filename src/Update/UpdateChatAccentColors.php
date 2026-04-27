<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGiftColors;

/**
 * Chat accent colors have changed.
 */
class UpdateChatAccentColors extends Update
{
    public const string TYPE_NAME = 'updateChatAccentColors';

    public function __construct(
        /**
         * The new chat accent color identifier.
         */
        protected int                 $accentColorId,
        /**
         * The new identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none.
         */
        protected int                 $backgroundCustomEmojiId,
        /**
         * Chat identifier.
         */
        protected int                 $chatId,
        /**
         * The new chat profile accent color identifier; -1 if none.
         */
        protected int                 $profileAccentColorId,
        /**
         * The new identifier of a custom emoji to be shown on the profile background; 0 if none.
         */
        protected int                 $profileBackgroundCustomEmojiId,
        /**
         * Color scheme based on an upgraded gift to be used for the chat instead of accent_color_id and background_custom_emoji_id; may be null if none.
         */
        protected ?UpgradedGiftColors $upgradedGiftColors,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatAccentColors
    {
        return new static(
            accentColorId                 : $array['accent_color_id'],
            backgroundCustomEmojiId       : $array['background_custom_emoji_id'],
            chatId                        : $array['chat_id'],
            profileAccentColorId          : $array['profile_accent_color_id'],
            profileBackgroundCustomEmojiId: $array['profile_background_custom_emoji_id'],
            upgradedGiftColors            : (isset($array['upgraded_gift_colors']) ? TdSchemaRegistry::fromArray($array['upgraded_gift_colors']) : null),
        );
    }

    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getProfileAccentColorId(): int
    {
        return $this->profileAccentColorId;
    }

    public function getProfileBackgroundCustomEmojiId(): int
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    public function getUpgradedGiftColors(): ?UpgradedGiftColors
    {
        return $this->upgradedGiftColors;
    }

    public function setAccentColorId(int $value): static
    {
        $this->accentColorId = $value;

        return $this;
    }

    public function setBackgroundCustomEmojiId(int $value): static
    {
        $this->backgroundCustomEmojiId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setProfileAccentColorId(int $value): static
    {
        $this->profileAccentColorId = $value;

        return $this;
    }

    public function setProfileBackgroundCustomEmojiId(int $value): static
    {
        $this->profileBackgroundCustomEmojiId = $value;

        return $this;
    }

    public function setUpgradedGiftColors(?UpgradedGiftColors $value): static
    {
        $this->upgradedGiftColors = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'accent_color_id'                    => $this->accentColorId,
            'background_custom_emoji_id'         => $this->backgroundCustomEmojiId,
            'chat_id'                            => $this->chatId,
            'profile_accent_color_id'            => $this->profileAccentColorId,
            'profile_background_custom_emoji_id' => $this->profileBackgroundCustomEmojiId,
            'upgraded_gift_colors'               => (null !== $this->upgradedGiftColors ? $this->upgradedGiftColors->jsonSerialize() : null),
        ];
    }
}
