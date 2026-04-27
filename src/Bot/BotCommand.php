<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a command supported by a bot.
 */
class BotCommand extends TdObject
{
    public const string TYPE_NAME = 'botCommand';

    public function __construct(
        /**
         * Text of the bot command.
         */
        protected string $command,
        /**
         * Description of the bot command.
         */
        protected string $description,
    ) {}

    public static function fromArray(array $array): BotCommand
    {
        return new static(
            command    : $array['command'],
            description: $array['description'],
        );
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setCommand(string $value): static
    {
        $this->command = $value;

        return $this;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'command'     => $this->command,
            'description' => $this->description,
        ];
    }
}
