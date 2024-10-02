<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of media previews of a bot.
 */
class GetBotMediaPreviews extends TdFunction
{
    public const TYPE_NAME = 'getBotMediaPreviews';

    public function __construct(
        /**
         * Identifier of the target bot. The bot must have the main Web App.
         */
        protected int $botUserId
    ) {}

    public static function fromArray(array $array): GetBotMediaPreviews
    {
        return new static(
            $array['bot_user_id'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
        ];
    }
}
