<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Business\BusinessConnectedBot;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds or changes business bot that is connected to the current user account.
 */
class SetBusinessConnectedBot extends TdFunction
{
    public const TYPE_NAME = 'setBusinessConnectedBot';

    public function __construct(
        /**
         * Connection settings for the bot.
         */
        protected BusinessConnectedBot $bot
    ) {}

    public static function fromArray(array $array): SetBusinessConnectedBot
    {
        return new static(
            TdSchemaRegistry::fromArray($array['bot']),
        );
    }

    public function getBot(): BusinessConnectedBot
    {
        return $this->bot;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot'   => $this->bot->typeSerialize(),
        ];
    }
}
