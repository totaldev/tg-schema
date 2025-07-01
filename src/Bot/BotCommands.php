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
    public const TYPE_NAME = 'botCommands';

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
        protected array $commands
    ) {}

    public static function fromArray(array $array): BotCommands
    {
        return new static(
            $array['bot_user_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'commands'    => array_map(static fn($x) => $x->typeSerialize(), $this->commands),
        ];
    }
}
