<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Bot\BotCommandScope;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the list of commands supported by the bot for the given user scope and language; for bots only.
 */
class GetCommands extends TdFunction
{
    public const TYPE_NAME = 'getCommands';

    public function __construct(
        /**
         * The scope to which the commands are relevant; pass null to get commands in the default bot command scope.
         */
        protected BotCommandScope $scope,
        /**
         * A two-letter ISO 639-1 language code or an empty string.
         */
        protected string          $languageCode,
    ) {}

    public static function fromArray(array $array): GetCommands
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            $array['language_code'],
        );
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function getScope(): BotCommandScope
    {
        return $this->scope;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'scope'         => $this->scope->typeSerialize(),
            'language_code' => $this->languageCode,
        ];
    }
}
