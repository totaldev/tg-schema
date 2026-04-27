<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets the name of a bot. Can be called only if userTypeBot.can_be_edited == true.
 */
class SetBotName extends TdFunction
{
    public const string TYPE_NAME = 'setBotName';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int    $botUserId,
        /**
         * A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose languages there is no dedicated name.
         */
        protected string $languageCode,
        /**
         * New bot's name on the specified language; 0-64 characters; must be non-empty if language code is empty.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): SetBotName
    {
        return new static(
            botUserId   : $array['bot_user_id'],
            languageCode: $array['language_code'],
            name        : $array['name'],
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setLanguageCode(string $value): static
    {
        $this->languageCode = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'language_code' => $this->languageCode,
            'name'          => $this->name,
        ];
    }
}
