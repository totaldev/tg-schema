<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Boost;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Boosts a chat
 */
class BoostChat extends TdFunction
{
    public const TYPE_NAME = 'boostChat';

    /**
     * Identifier of the chat
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): BoostChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
