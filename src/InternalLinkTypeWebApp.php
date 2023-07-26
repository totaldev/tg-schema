<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The link is a link to a Web App. Call searchPublicChat with the given bot username, check that the user is a bot, then call searchWebApp with the received bot and the given web_app_short_name. Process received foundWebApp by showing a confirmation dialog if needed, then calling getWebAppLinkUrl and opening the returned URL
 */
class InternalLinkTypeWebApp extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeWebApp';

    /**
     * Username of the bot that owns the Web App
     *
     * @var string
     */
    protected string $botUsername;

    /**
     * Short name of the Web App
     *
     * @var string
     */
    protected string $webAppShortName;

    /**
     * Start parameter to be passed to getWebAppLinkUrl
     *
     * @var string
     */
    protected string $startParameter;

    public function __construct(string $botUsername, string $webAppShortName, string $startParameter)
    {
        parent::__construct();

        $this->botUsername = $botUsername;
        $this->webAppShortName = $webAppShortName;
        $this->startParameter = $startParameter;
    }

    public static function fromArray(array $array): InternalLinkTypeWebApp
    {
        return new static(
            $array['bot_username'],
            $array['web_app_short_name'],
            $array['start_parameter'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_username' => $this->botUsername,
            'web_app_short_name' => $this->webAppShortName,
            'start_parameter' => $this->startParameter,
        ];
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getWebAppShortName(): string
    {
        return $this->webAppShortName;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }
}
