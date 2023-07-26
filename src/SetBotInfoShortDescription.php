<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Sets the text shown on a bot's profile page and sent together with the link when users share the bot. Can be called only if userTypeBot.can_be_edited == true
 */
class SetBotInfoShortDescription extends TdFunction
{
    public const TYPE_NAME = 'setBotInfoShortDescription';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * A two-letter ISO 639-1 language code. If empty, the short description will be shown to all users for whose languages there is no dedicated description
     *
     * @var string
     */
    protected string $languageCode;

    /**
     * New bot's short description on the specified language
     *
     * @var string
     */
    protected string $shortDescription;

    public function __construct(int $botUserId, string $languageCode, string $shortDescription)
    {
        $this->botUserId = $botUserId;
        $this->languageCode = $languageCode;
        $this->shortDescription = $shortDescription;
    }

    public static function fromArray(array $array): SetBotInfoShortDescription
    {
        return new static(
            $array['bot_user_id'],
            $array['language_code'],
            $array['short_description'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'language_code' => $this->languageCode,
            'short_description' => $this->shortDescription,
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

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
}
