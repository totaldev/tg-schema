<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a chat with a Telegram bot. Call searchPublicChat with the given bot username, check that the user is a bot, show START button in the chat with the bot, and then call sendBotStartMessage with the given start parameter after the button is pressed
 */
class InternalLinkTypeBotStart extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBotStart';

    /**
     * Username of the bot
     *
     * @var string
     */
    protected string $botUsername;

    /**
     * The parameter to be passed to sendBotStartMessage
     *
     * @var string
     */
    protected string $startParameter;

    /**
     * True, if sendBotStartMessage must be called automatically without showing the START button
     *
     * @var bool
     */
    protected bool $autostart;

    public function __construct(string $botUsername, string $startParameter, bool $autostart)
    {
        parent::__construct();

        $this->botUsername = $botUsername;
        $this->startParameter = $startParameter;
        $this->autostart = $autostart;
    }

    public static function fromArray(array $array): InternalLinkTypeBotStart
    {
        return new static(
            $array['bot_username'],
            $array['start_parameter'],
            $array['autostart'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_username' => $this->botUsername,
            'start_parameter' => $this->startParameter,
            'autostart' => $this->autostart,
        ];
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function getAutostart(): bool
    {
        return $this->autostart;
    }
}
