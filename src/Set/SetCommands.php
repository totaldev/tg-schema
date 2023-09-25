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
 * Sets the list of commands supported by the bot for the given user scope and language; for bots only
 */
class SetCommands extends TdFunction
{
    public const TYPE_NAME = 'setCommands';

    /**
     * List of the bot's commands
     *
     * @var BotCommand[]
     */
    protected array $commands;

    /**
     * A two-letter ISO 639-1 language code. If empty, the commands will be applied to all users from the given scope, for which language there are no
     * dedicated commands
     *
     * @var string
     */
    protected string $languageCode;

    /**
     * The scope to which the commands are relevant; pass null to change commands in the default bot command scope
     *
     * @var BotCommandScope
     */
    protected BotCommandScope $scope;

    public function __construct(BotCommandScope $scope, string $languageCode, array $commands)
    {
        $this->scope = $scope;
        $this->languageCode = $languageCode;
        $this->commands = $commands;
    }

    public static function fromArray(array $array): SetCommands
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            $array['language_code'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
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

    public function getScope(): BotCommandScope
    {
        return $this->scope;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'scope' => $this->scope->typeSerialize(),
            'language_code' => $this->languageCode,
            array_map(fn($x) => $x->typeSerialize(), $this->commands),
        ];
    }
}
