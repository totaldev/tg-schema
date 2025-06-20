<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\Bot\BotCommandScope;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Deletes commands supported by the bot for the given user scope and language; for bots only.
 */
class DeleteCommands extends TdFunction
{
    public const TYPE_NAME = 'deleteCommands';

    public function __construct(
        /**
         * The scope to which the commands are relevant; pass null to delete commands in the default bot command scope.
         */
        protected BotCommandScope $scope,
        /**
         * A two-letter ISO 639-1 language code or an empty string.
         */
        protected string          $languageCode
    ) {}

    public static function fromArray(array $array): DeleteCommands
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
