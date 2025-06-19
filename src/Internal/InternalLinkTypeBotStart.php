<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a chat with a Telegram bot. Call searchPublicChat with the given bot username, check that the user is a bot, show START button in the
 * chat with the bot, and then call sendBotStartMessage with the given start parameter after the button is pressed.
 */
class InternalLinkTypeBotStart extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBotStart';

    public function __construct(
        /**
         * Username of the bot.
         */
        protected string $botUsername,
        /**
         * The parameter to be passed to sendBotStartMessage.
         */
        protected string $startParameter,
        /**
         * True, if sendBotStartMessage must be called automatically without showing the START button.
         */
        protected bool   $autostart
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeBotStart
    {
        return new static(
            $array['bot_username'],
            $array['start_parameter'],
            $array['autostart'],
        );
    }

    public function getAutostart(): bool
    {
        return $this->autostart;
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'bot_username'    => $this->botUsername,
            'start_parameter' => $this->startParameter,
            'autostart'       => $this->autostart,
        ];
    }
}
