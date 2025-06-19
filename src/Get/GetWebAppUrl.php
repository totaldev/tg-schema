<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Web\WebAppOpenParameters;

/**
 * Returns an HTTPS URL of a Web App to open from the side menu, a keyboardButtonTypeWebApp button, or an inlineQueryResultsButtonTypeWebApp button.
 */
class GetWebAppUrl extends TdFunction
{
    public const TYPE_NAME = 'getWebAppUrl';

    public function __construct(
        /**
         * Identifier of the target bot. If the bot is restricted for the current user, then show an error instead of calling the method.
         */
        protected int                  $botUserId,
        /**
         * The URL from a keyboardButtonTypeWebApp button, inlineQueryResultsButtonTypeWebApp button, or an empty string when the bot is opened from the side menu.
         */
        protected string               $url,
        /**
         * Parameters to use to open the Web App.
         */
        protected WebAppOpenParameters $parameters
    ) {}

    public static function fromArray(array $array): GetWebAppUrl
    {
        return new static(
            $array['bot_user_id'],
            $array['url'],
            TdSchemaRegistry::fromArray($array['parameters']),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getParameters(): WebAppOpenParameters
    {
        return $this->parameters;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'url'         => $this->url,
            'parameters'  => $this->parameters->typeSerialize(),
        ];
    }
}
