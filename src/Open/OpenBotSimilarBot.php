<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Open;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that a bot was opened from the list of similar bots.
 */
class OpenBotSimilarBot extends TdFunction
{
    public const TYPE_NAME = 'openBotSimilarBot';

    public function __construct(
        /**
         * Identifier of the original bot, which similar bots were requested.
         */
        protected int $botUserId,
        /**
         * Identifier of the opened bot.
         */
        protected int $openedBotUserId
    ) {}

    public static function fromArray(array $array): OpenBotSimilarBot
    {
        return new static(
            $array['bot_user_id'],
            $array['opened_bot_user_id'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getOpenedBotUserId(): int
    {
        return $this->openedBotUserId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'bot_user_id'        => $this->botUserId,
            'opened_bot_user_id' => $this->openedBotUserId,
        ];
    }
}
