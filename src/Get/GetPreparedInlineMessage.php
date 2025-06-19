<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Saves an inline message to be sent by the given user.
 */
class GetPreparedInlineMessage extends TdFunction
{
    public const TYPE_NAME = 'getPreparedInlineMessage';

    public function __construct(
        /**
         * Identifier of the bot that created the message.
         */
        protected int    $botUserId,
        /**
         * Identifier of the prepared message.
         */
        protected string $preparedMessageId
    ) {}

    public static function fromArray(array $array): GetPreparedInlineMessage
    {
        return new static(
            $array['bot_user_id'],
            $array['prepared_message_id'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getPreparedMessageId(): string
    {
        return $this->preparedMessageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'bot_user_id'         => $this->botUserId,
            'prepared_message_id' => $this->preparedMessageId,
        ];
    }
}
