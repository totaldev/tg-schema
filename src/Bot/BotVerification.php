<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes verification status provided by a bot.
 */
class BotVerification extends TdObject
{
    public const TYPE_NAME = 'botVerification';

    public function __construct(
        /**
         * Identifier of the bot that provided the verification.
         */
        protected int           $botUserId,
        /**
         * Identifier of the custom emoji that is used as the verification sign.
         */
        protected int           $iconCustomEmojiId,
        /**
         * Custom description of verification reason set by the bot. Can contain only Mention, Hashtag, Cashtag, PhoneNumber, BankCardNumber, Url, and EmailAddress entities.
         */
        protected FormattedText $customDescription
    ) {}

    public static function fromArray(array $array): BotVerification
    {
        return new static(
            $array['bot_user_id'],
            $array['icon_custom_emoji_id'],
            TdSchemaRegistry::fromArray($array['custom_description']),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getCustomDescription(): FormattedText
    {
        return $this->customDescription;
    }

    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'bot_user_id'          => $this->botUserId,
            'icon_custom_emoji_id' => $this->iconCustomEmojiId,
            'custom_description'   => $this->customDescription->typeSerialize(),
        ];
    }
}
