<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns list of boosts applied to a chat. The user must be an administrator in the channel chat to get the list of boosts
 */
class GetChatBoosts extends TdFunction
{
    public const TYPE_NAME = 'getChatBoosts';

    /**
     * Identifier of the chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The maximum number of boosts to be returned; up to 100. For optimal performance, the number of returned boosts can be smaller than the specified limit
     *
     * @var int
     */
    protected int $limit;

    /**
     * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     *
     * @var string
     */
    protected string $offset;

    public function __construct(int $chatId, string $offset, int $limit)
    {
        $this->chatId = $chatId;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetChatBoosts
    {
        return new static(
            $array['chat_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }
}
