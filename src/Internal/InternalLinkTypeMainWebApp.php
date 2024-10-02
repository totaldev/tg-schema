<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the main Web App of a bot. Call searchPublicChat with the given bot username, check that the user is a bot and has the main Web App.
 * If the bot can be added to attachment menu, then use getAttachmentMenuBot to receive information about the bot, then if the bot isn't added to side menu,
 * show a disclaimer about Mini Apps being third-party applications, ask the user to accept their Terms of service and confirm adding the bot to side and
 * attachment menu, then if the user accepts the terms and confirms adding, use toggleBotIsAddedToAttachmentMenu to add the bot. Then, use getMainWebApp with
 * the given start parameter and open the returned URL as a Web App.
 */
class InternalLinkTypeMainWebApp extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeMainWebApp';

    public function __construct(
        /**
         * Username of the bot.
         */
        protected string $botUsername,
        /**
         * Start parameter to be passed to getMainWebApp.
         */
        protected string $startParameter,
        /**
         * True, if the Web App must be opened in the compact mode instead of the full-size mode.
         */
        protected bool   $isCompact,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeMainWebApp
    {
        return new static(
            $array['bot_username'],
            $array['start_parameter'],
            $array['is_compact'],
        );
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getIsCompact(): bool
    {
        return $this->isCompact;
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
            'is_compact'      => $this->isCompact,
        ];
    }
}
