<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks whether the specified bot can send messages to the user. Returns a 404 error if can't and the access can be granted by call to allowBotToSendMessages
 */
class CanBotSendMessages extends TdFunction
{
    public const TYPE_NAME = 'canBotSendMessages';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

    public function __construct(int $botUserId)
    {
        $this->botUserId = $botUserId;
    }

    public static function fromArray(array $array): CanBotSendMessages
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
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
        ];
    }
}
