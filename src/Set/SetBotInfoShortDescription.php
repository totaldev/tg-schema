<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets the text shown on a bot's profile page and sent together with the link when users share the bot. Can be called only if userTypeBot.can_be_edited ==
 * true.
 */
class SetBotInfoShortDescription extends TdFunction
{
    public const TYPE_NAME = 'setBotInfoShortDescription';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int    $botUserId,
        /**
         * A two-letter ISO 639-1 language code. If empty, the short description will be shown to all users for whose languages there is no dedicated description.
         */
        protected string $languageCode,
        /**
         * New bot's short description on the specified language.
         */
        protected string $shortDescription
    ) {}

    public static function fromArray(array $array): SetBotInfoShortDescription
    {
        return new static(
            $array['bot_user_id'],
            $array['language_code'],
            $array['short_description'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'bot_user_id'       => $this->botUserId,
            'language_code'     => $this->languageCode,
            'short_description' => $this->shortDescription,
        ];
    }
}
