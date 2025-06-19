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
    public const TYPE_NAME = 'getMainWebApp';

    public function __construct(
        /**
         * Identifier of the chat in which the Web App is opened; pass 0 if none.
         */
        protected int                  $chatId,
        /**
         * Identifier of the target bot. If the bot is restricted for the current user, then show an error instead of calling the method.
         */
        protected int                  $botUserId,
        /**
         * Start parameter from internalLinkTypeMainWebApp.
         */
        protected string               $startParameter,
        /**
         * Parameters to use to open the Web App.
         */
        protected WebAppOpenParameters $parameters
    ) {}

    public static function fromArray(array $array): GetMainWebApp
    {
        return new static(
            $array['chat_id'],
            $array['bot_user_id'],
            $array['start_parameter'],
            TdSchemaRegistry::fromArray($array['parameters']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'bot_user_id'     => $this->botUserId,
            'start_parameter' => $this->startParameter,
            'parameters'      => $this->parameters->typeSerialize(),
        ];
    }
}
