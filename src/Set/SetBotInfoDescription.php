<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets the text shown in the chat with a bot if the chat is empty. Can be called only if userTypeBot.can_be_edited == true.
 */
class SetBotInfoDescription extends TdFunction
{
    public const TYPE_NAME = 'setBotInfoDescription';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int    $botUserId,
        /**
         * A two-letter ISO 639-1 language code. If empty, the description will be shown to all users for whose languages there is no dedicated description.
         */
        protected string $languageCode,
        /**
         * New bot's description on the specified language.
         */
        protected string $description
    ) {}

    public static function fromArray(array $array): SetBotInfoDescription
    {
        return new static(
            $array['bot_user_id'],
            $array['language_code'],
            $array['description'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getDescription(): string
    {
        return $this->description;
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
            'description'   => $this->description,
        ];
    }
}
