<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Background\BackgroundType;
use Totaldev\TgSchema\Input\InputBackground;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the background in a specific chat. Supported only in private and secret chats with non-deleted users, and in chats with sufficient boost level and
 * can_change_info administrator right.
 */
class SetChatBackground extends TdFunction
{
    public const TYPE_NAME = 'setChatBackground';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int             $chatId,
        /**
         * The input background to use; pass null to create a new filled or chat theme background.
         */
        protected InputBackground $background,
        /**
         * Dimming of the background in dark themes, as a percentage; 0-100. Applied only to Wallpaper and Fill types of background.
         */
        protected int             $darkThemeDimming,
        /**
         * Pass true to set background only for self; pass false to set background for all chat users. Always false for backgrounds set in boosted chats. Background can be set for both users only by Telegram Premium users and if set background isn't of the type inputBackgroundPrevious.
         */
        protected bool            $onlyForSelf,
        /**
         * Background type; pass null to use default background type for the chosen background; backgroundTypeChatTheme isn't supported for private and secret chats. Use chatBoostLevelFeatures.chat_theme_background_count and chatBoostLevelFeatures.can_set_custom_background to check whether the background type can be set in the boosted chat.
         */
        protected ?BackgroundType $type = null,
    ) {}

    public static function fromArray(array $array): SetChatBackground
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['background']),
            TdSchemaRegistry::fromArray($array['type']),
            $array['dark_theme_dimming'],
            $array['only_for_self'],
        );
    }

    public function getBackground(): InputBackground
    {
        return $this->background;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDarkThemeDimming(): int
    {
        return $this->darkThemeDimming;
    }

    public function getOnlyForSelf(): bool
    {
        return $this->onlyForSelf;
    }

    public function getType(): BackgroundType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'chat_id'            => $this->chatId,
            'background'         => $this->background->typeSerialize(),
            'type'               => $this->type->typeSerialize(),
            'dark_theme_dimming' => $this->darkThemeDimming,
            'only_for_self'      => $this->onlyForSelf,
        ];
    }
}
