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
    public const string TYPE_NAME = 'chatPosition';

    public function __construct(
        /**
         * True, if the chat is pinned in the chat list.
         */
        protected bool        $isPinned,
        /**
         * The chat list.
         */
        protected ChatList    $list,
        /**
         * A parameter used to determine order of the chat in the chat list. Chats must be sorted by the pair (order, chat.id) in descending order.
         */
        protected int         $order,
        /**
         * Source of the chat in the chat list; may be null.
         */
        protected ?ChatSource $source,
    ) {}

    public static function fromArray(array $array): ChatPosition
    {
        return new static(
            isPinned: $array['is_pinned'],
            list    : TdSchemaRegistry::fromArray($array['list']),
            order   : $array['order'],
            source  : (isset($array['source']) ? TdSchemaRegistry::fromArray($array['source']) : null),
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

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setList(ChatList $value): static
    {
        $this->list = $value;

        return $this;
    }

    public function setOrder(int $value): static
    {
        $this->order = $value;

        return $this;
    }

    public function setSource(?ChatSource $value): static
    {
        $this->source = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
            'list'      => $this->list->jsonSerialize(),
            'order'     => $this->order,
            'source'    => (null !== $this->source ? $this->source->jsonSerialize() : null),
        ];
    }
}
