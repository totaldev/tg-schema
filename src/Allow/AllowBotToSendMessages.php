<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Allow;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Allows the specified bot to send messages to the user
 */
class AllowBotToSendMessages extends TdFunction
{
    public const TYPE_NAME = 'allowBotToSendMessages';

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

    public static function fromArray(array $array): AllowBotToSendMessages
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
