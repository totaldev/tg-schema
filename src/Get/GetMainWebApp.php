<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeParameters;

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
        protected int             $chatId,
        /**
         * Identifier of the target bot.
         */
        protected int             $botUserId,
        /**
         * Start parameter from internalLinkTypeMainWebApp.
         */
        protected string          $startParameter,
        /**
         * Preferred Web App theme; pass null to use the default theme.
         */
        protected ThemeParameters $theme,
        /**
         * Short name of the current application; 0-64 English letters, digits, and underscores.
         */
        protected string          $applicationName,
    ) {}

    public static function fromArray(array $array): GetMainWebApp
    {
        return new static(
            $array['chat_id'],
            $array['bot_user_id'],
            $array['start_parameter'],
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

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function getTheme(): ThemeParameters
    {
        return $this->theme;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'bot_user_id'      => $this->botUserId,
            'start_parameter'  => $this->startParameter,
            'theme'            => $this->theme->typeSerialize(),
            'application_name' => $this->applicationName,
        ];
    }
}
