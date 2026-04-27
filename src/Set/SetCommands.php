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
    public const string TYPE_NAME = 'setCommands';

    public function __construct(
        /**
         * List of the bot's commands.
         *
         * @var BotCommand[]
         */
        protected array            $commands,
        /**
         * A two-letter ISO 639-1 language code. If empty, the commands will be applied to all users from the given scope, for which language there are no dedicated commands.
         */
        protected string           $languageCode,
        /**
         * The scope to which the commands are relevant; pass null to change commands in the default bot command scope.
         */
        protected ?BotCommandScope $scope = null,
    ) {}

    public static function fromArray(array $array): SetCommands
    {
        return new static(
            commands    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
            languageCode: $array['language_code'],
            scope       : (isset($array['scope']) ? TdSchemaRegistry::fromArray($array['scope']) : null),
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

    public function setCommands(array $value): static
    {
        $this->commands = $value;

        return $this;
    }

    public function setLanguageCode(string $value): static
    {
        $this->languageCode = $value;

        return $this;
    }

    public function setScope(?BotCommandScope $value): static
    {
        $this->scope = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'commands'      => array_map(static fn($x) => $x->jsonSerialize(), $this->commands),
            'language_code' => $this->languageCode,
            'scope'         => (null !== $this->scope ? $this->scope->jsonSerialize() : null),
        ];
    }
}
