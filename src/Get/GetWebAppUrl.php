<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an HTTPS URL of a Web App to open after keyboardButtonTypeWebApp or inlineQueryResultsButtonTypeWebApp button is pressed
 */
class GetWebAppUrl extends TdFunction
{
    public const TYPE_NAME = 'getWebAppUrl';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * The URL from the keyboardButtonTypeWebApp or inlineQueryResultsButtonTypeWebApp button
     *
     * @var string
     */
    protected string $url;

    /**
     * Preferred Web App theme; pass null to use the default theme
     *
     * @var ThemeParameters
     */
    protected ThemeParameters $theme;

    /**
     * Short name of the application; 0-64 English letters, digits, and underscores
     *
     * @var string
     */
    protected string $applicationName;

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

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTheme(): ThemeParameters
    {
        return $this->theme;
    }

    public function getApplicationName(): string
    {
        return $this->applicationName;
    }
}
