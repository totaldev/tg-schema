<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of media previews for the given language and the list of languages for which the bot has dedicated previews.
 */
class GetBotMediaPreviewInfo extends TdFunction
{
    public const TYPE_NAME = 'getBotMediaPreviewInfo';

    public function __construct(
        /**
         * Identifier of the target bot. The bot must be owned and must have the main Web App.
         */
        protected int    $botUserId,
        /**
         * A two-letter ISO 639-1 language code for which to get previews. If empty, then default previews are returned.
         */
        protected string $languageCode,
    ) {}

    public static function fromArray(array $array): GetBotMediaPreviewInfo
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
