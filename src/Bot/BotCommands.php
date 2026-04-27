<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of bot commands.
 */
class BotCommands extends TdObject
{
    public const string TYPE_NAME = 'botCommands';

    public function __construct(
        /**
         * Bot's user identifier.
         */
        protected int   $botUserId,
        /**
         * List of bot commands.
         *
         * @var BotCommand[]
         */
        protected array $commands,
    ) {}

    public static function fromArray(array $array): BotCommands
    {
        return new static(
            botUserId: $array['bot_user_id'],
            commands : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getCommands(): array
    {
        return $this->commands;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setCommands(array $value): static
    {
        $this->commands = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'commands'    => array_map(static fn($x) => $x->jsonSerialize(), $this->commands),
        ];
    }
}
