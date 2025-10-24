<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Gift\GiftChatTheme;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat theme based on an upgraded gift.
 */
class ChatThemeGift extends ChatTheme
{
    public const string TYPE_NAME = 'chatThemeGift';

    public function __construct(
        /**
         * The chat theme.
         */
        protected GiftChatTheme $giftTheme
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatThemeGift
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift_theme']),
        );
    }

    public function getGiftTheme(): GiftChatTheme
    {
        return $this->giftTheme;
    }

    public function setGiftTheme(GiftChatTheme $value): static
    {
        $this->giftTheme = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'gift_theme' => $this->giftTheme->typeSerialize(),
        ];
    }
}
