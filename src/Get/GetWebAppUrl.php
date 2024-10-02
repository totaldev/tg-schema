<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeParameters;

/**
 * Returns an HTTPS URL of a Web App to open from the side menu, a keyboardButtonTypeWebApp button, or an inlineQueryResultsButtonTypeWebApp button.
 */
class GetWebAppUrl extends TdFunction
{
    public const TYPE_NAME = 'getWebAppUrl';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int             $botUserId,
        /**
         * The URL from a keyboardButtonTypeWebApp button, inlineQueryResultsButtonTypeWebApp button, or an empty string when the bot is opened from the side menu.
         */
        protected string          $url,
        /**
         * Preferred Web App theme; pass null to use the default theme.
         */
        protected ThemeParameters $theme,
        /**
         * Short name of the current application; 0-64 English letters, digits, and underscores.
         */
        protected string          $applicationName,
    ) {}

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
            '@type'            => static::TYPE_NAME,
            'bot_user_id'      => $this->botUserId,
            'url'              => $this->url,
            'theme'            => $this->theme->typeSerialize(),
            'application_name' => $this->applicationName,
        ];
    }
}
