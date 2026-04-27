<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Web\WebAppOpenParameters;

/**
 * Returns information needed to open the main Web App of a bot.
 */
class GetMainWebApp extends TdFunction
{
    public const string TYPE_NAME = 'getMainWebApp';

    public function __construct(
        /**
         * Identifier of the target bot. If the bot is restricted for the current user, then show an error instead of calling the method.
         */
        protected int                  $botUserId,
        /**
         * Identifier of the chat in which the Web App is opened; pass 0 if none.
         */
        protected int                  $chatId,
        /**
         * Parameters to use to open the Web App.
         */
        protected WebAppOpenParameters $parameters,
        /**
         * Start parameter from internalLinkTypeMainWebApp.
         */
        protected string               $startParameter,
    ) {}

    public static function fromArray(array $array): GetMainWebApp
    {
        return new static(
            botUserId     : $array['bot_user_id'],
            chatId        : $array['chat_id'],
            parameters    : TdSchemaRegistry::fromArray($array['parameters']),
            startParameter: $array['start_parameter'],
        );
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'bot_user_id'     => $this->botUserId,
            'chat_id'         => $this->chatId,
            'parameters'      => $this->parameters->jsonSerialize(),
            'start_parameter' => $this->startParameter,
        ];
    }
}
