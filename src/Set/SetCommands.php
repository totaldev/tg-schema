<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Bot\BotCommand;
use Totaldev\TgSchema\Bot\BotCommandScope;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the list of commands supported by the bot for the given user scope and language; for bots only.
 */
class SetCommands extends TdFunction
{
    public const TYPE_NAME = 'setCommands';

    public function __construct(
        /**
         * A two-letter ISO 639-1 language code. If empty, the commands will be applied to all users from the given scope, for which language there are no dedicated commands.
         */
        protected string           $languageCode,
        /**
         * List of the bot's commands.
         *
         * @var BotCommand[]
         */
        protected array            $commands,
        /**
         * The scope to which the commands are relevant; pass null to change commands in the default bot command scope.
         */
        protected ?BotCommandScope $scope = null
    ) {}

    public static function fromArray(array $array): SetCommands
    {
        return new static(
            isset($array['scope']) ? TdSchemaRegistry::fromArray($array['scope']) : null,
            $array['language_code'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
        );
    }

    public function getCommands(): array
    {
        return $this->commands;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function getScope(): ?BotCommandScope
    {
        return $this->scope;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'scope'         => $this->scope ?? null,
            'language_code' => $this->languageCode,
            array_map(static fn($x) => $x->typeSerialize(), $this->commands),
        ];
    }
}
