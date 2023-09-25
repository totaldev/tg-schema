<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeParameters;

/**
 * Returns an HTTPS URL of a Web App to open from the side menu, a keyboardButtonTypeWebApp button, an inlineQueryResultsButtonTypeWebApp button, or an
 * internalLinkTypeSideMenuBot link
 */
class GetWebAppUrl extends TdFunction
{
    public const TYPE_NAME = 'getWebAppUrl';

    /**
     * Short name of the application; 0-64 English letters, digits, and underscores
     *
     * @var string
     */
    protected string $applicationName;

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * Preferred Web App theme; pass null to use the default theme
     *
     * @var ThemeParameters
     */
    protected ThemeParameters $theme;

    /**
     * The URL from a keyboardButtonTypeWebApp button, inlineQueryResultsButtonTypeWebApp button, an internalLinkTypeSideMenuBot link, or an empty when the bot
     * is opened from the side menu
     *
     * @var string
     */
    protected string $url;

    public function __construct(int $botUserId, string $url, ThemeParameters $theme, string $applicationName)
    {
        $this->botUserId = $botUserId;
        $this->url = $url;
        $this->theme = $theme;
        $this->applicationName = $applicationName;
    }

    public static function fromArray(array $array): GetWebAppUrl
    {
        return new static(
            $array['bot_user_id'],
            $array['url'],
            TdSchemaRegistry::fromArray($array['theme']),
            $array['application_name'],
        );
    }

    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getTheme(): ThemeParameters
    {
        return $this->theme;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'url' => $this->url,
            'theme' => $this->theme->typeSerialize(),
            'application_name' => $this->applicationName,
        ];
    }
}
