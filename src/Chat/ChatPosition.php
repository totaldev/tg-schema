<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a position of a chat in a chat list.
 */
class ChatPosition extends TdObject
{
    public const TYPE_NAME = 'chatPosition';

    public function __construct(
        /**
         * The chat list.
         */
        protected ChatList    $list,
        /**
         * A parameter used to determine order of the chat in the chat list. Chats must be sorted by the pair (order, chat.id) in descending order.
         */
        protected int         $order,
        /**
         * True, if the chat is pinned in the chat list.
         */
        protected bool        $isPinned,
        /**
         * Source of the chat in the chat list; may be null.
         */
        protected ?ChatSource $source
    ) {}

    public static function fromArray(array $array): ChatPosition
    {
        return new static(
            TdSchemaRegistry::fromArray($array['list']),
            $array['order'],
            $array['is_pinned'],
            isset($array['source']) ? TdSchemaRegistry::fromArray($array['source']) : null,
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getList(): ChatList
    {
        return $this->list;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getSource(): ?ChatSource
    {
        return $this->source;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'list'      => $this->list->typeSerialize(),
            'order'     => $this->order,
            'is_pinned' => $this->isPinned,
            'source'    => (isset($this->source) ? $this->source : null),
        ];
    }
}
