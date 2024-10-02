<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a Web App. Call searchPublicChat with the given bot username, check that the user is a bot, then call searchWebApp with the received
 * bot and the given web_app_short_name. Process received foundWebApp by showing a confirmation dialog if needed. If the bot can be added to attachment or side
 * menu, but isn't added yet, then show a disclaimer about Mini Apps being third-party applications instead of the dialog and ask the user to accept their
 * Terms of service. If the user accept the terms and confirms adding, then use toggleBotIsAddedToAttachmentMenu to add the bot. Then, call getWebAppLinkUrl
 * and open the returned URL as a Web App.
 */
class InternalLinkTypeWebApp extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeWebApp';

    public function __construct(
        /**
         * Username of the bot that owns the Web App.
         */
        protected string $botUsername,
        /**
         * Short name of the Web App.
         */
        protected string $webAppShortName,
        /**
         * Start parameter to be passed to getWebAppLinkUrl.
         */
        protected string $startParameter,
        /**
         * True, if the Web App must be opened in the compact mode instead of the full-size mode.
         */
        protected bool   $isCompact,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeWebApp
    {
        return new static(
            $array['bot_username'],
            $array['web_app_short_name'],
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

    public function getWebAppShortName(): string
    {
        return $this->webAppShortName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'bot_username'       => $this->botUsername,
            'web_app_short_name' => $this->webAppShortName,
            'start_parameter'    => $this->startParameter,
            'is_compact'         => $this->isCompact,
        ];
    }
}
