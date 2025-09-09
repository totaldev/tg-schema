<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Web\WebAppOpenParameters;

/**
 * Returns an HTTPS URL of a Web App to open after a link of the type internalLinkTypeWebApp is clicked.
 */
class GetWebAppLinkUrl extends TdFunction
{
    public const TYPE_NAME = 'getWebAppLinkUrl';

    public function __construct(
        /**
         * Identifier of the chat in which the link was clicked; pass 0 if none.
         */
        protected int                  $chatId,
        /**
         * Identifier of the target bot.
         */
        protected int                  $botUserId,
        /**
         * Short name of the Web App.
         */
        protected string               $webAppShortName,
        /**
         * Start parameter from internalLinkTypeWebApp.
         */
        protected string               $startParameter,
        /**
         * Pass true if the current user allowed the bot to send them messages.
         */
        protected bool                 $allowWriteAccess,
        /**
         * Parameters to use to open the Web App.
         */
        protected WebAppOpenParameters $parameters,
    ) {}

    public static function fromArray(array $array): GetWebAppLinkUrl
    {
        return new static(
            $array['chat_id'],
            $array['bot_user_id'],
            $array['web_app_short_name'],
            $array['start_parameter'],
            $array['allow_write_access'],
            TdSchemaRegistry::fromArray($array['parameters']),
        );
    }

    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getParameters(): WebAppOpenParameters
    {
        return $this->parameters;
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
            'chat_id'            => $this->chatId,
            'bot_user_id'        => $this->botUserId,
            'web_app_short_name' => $this->webAppShortName,
            'start_parameter'    => $this->startParameter,
            'allow_write_access' => $this->allowWriteAccess,
            'parameters'         => $this->parameters->typeSerialize(),
        ];
    }
}
