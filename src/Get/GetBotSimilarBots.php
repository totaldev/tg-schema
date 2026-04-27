<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a list of bots similar to the given bot.
 */
class GetBotSimilarBots extends TdFunction
{
    public const string TYPE_NAME = 'getBotSimilarBots';

    public function __construct(
        /**
         * User identifier of the target bot.
         */
        protected int $botUserId
    ) {}

    public static function fromArray(array $array): GetBotSimilarBots
    {
        return new static(
            botUserId: $array['bot_user_id'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
        ];
    }
}
