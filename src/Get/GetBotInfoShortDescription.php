<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the text shown on a bot's profile page and sent together with the link when users share the bot in the given language. Can be called only if
 * userTypeBot.can_be_edited == true.
 */
class GetBotInfoShortDescription extends TdFunction
{
    public const TYPE_NAME = 'getBotInfoShortDescription';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int    $botUserId,
        /**
         * A two-letter ISO 639-1 language code or an empty string.
         */
        protected string $languageCode,
    ) {}

    public static function fromArray(array $array): GetBotInfoShortDescription
    {
        return new static(
            $array['bot_user_id'],
            $array['language_code'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'language_code' => $this->languageCode,
        ];
    }
}
