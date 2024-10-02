<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Sets the name of a bot. Can be called only if userTypeBot.can_be_edited == true
 */
class SetBotName extends TdFunction
{
    public const TYPE_NAME = 'setBotName';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose languages there is no dedicated name
     *
     * @var string
     */
    protected string $languageCode;

    /**
     * New bot's name on the specified language; 0-64 characters; must be non-empty if language code is empty
     *
     * @var string
     */
    protected string $name;

    public function __construct(int $botUserId, string $languageCode, string $name)
    {
        $this->botUserId = $botUserId;
        $this->languageCode = $languageCode;
        $this->name = $name;
    }

    public static function fromArray(array $array): SetBotName
    {
        return new static(
            $array['bot_user_id'],
            $array['language_code'],
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'language_code' => $this->languageCode,
            'name' => $this->name,
        ];
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
}
