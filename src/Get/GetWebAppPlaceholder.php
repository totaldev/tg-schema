<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a default placeholder for Web Apps of a bot. This is an offline method. Returns a 404 error if the placeholder isn't known.
 */
class GetWebAppPlaceholder extends TdFunction
{
    public const TYPE_NAME = 'getWebAppPlaceholder';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int $botUserId
    ) {}

    public static function fromArray(array $array): GetWebAppPlaceholder
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
