<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Load;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdFunction;

/**
 * Loads more chats from a chat list. The loaded chats and their positions in the chat list will be sent through updates. Chats are sorted by the pair (chat.position.order, chat.id) in descending order. Returns a 404 error if all chats have been loaded
 */
class LoadChats extends TdFunction
{
    public const TYPE_NAME = 'loadChats';

    /**
     * The maximum number of chats to be loaded. For optimal performance, the number of loaded chats is chosen by TDLib and can be smaller than the specified limit, even if the end of the list is not reached
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $limit)
    {
        $this->limit = $limit;
    }

    public static function fromArray(array $array): LoadChats
    {
        return new static(
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit' => $this->limit,
        ];
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
