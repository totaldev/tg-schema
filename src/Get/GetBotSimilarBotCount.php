<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns approximate number of bots similar to the given bot.
 */
class GetBotSimilarBotCount extends TdFunction
{
    public const TYPE_NAME = 'getBotSimilarBotCount';

    public function __construct(
        /**
         * User identifier of the target bot.
         */
        protected int  $botUserId,
        /**
         * Pass true to get the number of bots without sending network requests, or -1 if the number of bots is unknown locally.
         */
        protected bool $returnLocal
    ) {}

    public static function fromArray(array $array): GetBotSimilarBotCount
    {
        return new static(
            $array['bot_user_id'],
            $array['return_local'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getReturnLocal(): bool
    {
        return $this->returnLocal;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'bot_user_id'  => $this->botUserId,
            'return_local' => $this->returnLocal,
        ];
    }
}
