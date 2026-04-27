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
    public const string TYPE_NAME = 'getWebAppLinkUrl';

    public function __construct(
        /**
         * Pass true if the current user allowed the bot to send them messages.
         */
        protected bool                 $allowWriteAccess,
        /**
         * Identifier of the target bot.
         */
        protected int                  $botUserId,
        /**
         * Identifier of the chat in which the link was clicked; pass 0 if none.
         */
        protected int                  $chatId,
        /**
         * Parameters to use to open the Web App.
         */
        protected WebAppOpenParameters $parameters,
        /**
         * Start parameter from internalLinkTypeWebApp.
         */
        protected string               $startParameter,
        /**
         * Short name of the Web App.
         */
        protected string               $webAppShortName,
    ) {}

    public static function fromArray(array $array): GetWebAppLinkUrl
    {
        return new static(
            allowWriteAccess: $array['allow_write_access'],
            botUserId       : $array['bot_user_id'],
            chatId          : $array['chat_id'],
            parameters      : TdSchemaRegistry::fromArray($array['parameters']),
            startParameter  : $array['start_parameter'],
            webAppShortName : $array['web_app_short_name'],
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

    public function setAllowWriteAccess(bool $value): static
    {
        $this->allowWriteAccess = $value;

        return $this;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setParameters(WebAppOpenParameters $value): static
    {
        $this->parameters = $value;

        return $this;
    }

    public function setStartParameter(string $value): static
    {
        $this->startParameter = $value;

        return $this;
    }

    public function setWebAppShortName(string $value): static
    {
        $this->webAppShortName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'allow_write_access' => $this->allowWriteAccess,
            'bot_user_id'        => $this->botUserId,
            'chat_id'            => $this->chatId,
            'parameters'         => $this->parameters->jsonSerialize(),
            'start_parameter'    => $this->startParameter,
            'web_app_short_name' => $this->webAppShortName,
        ];
    }
}
