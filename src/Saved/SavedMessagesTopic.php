<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Saved;

use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a Saved Messages topic.
 */
class SavedMessagesTopic extends TdObject
{
    public const TYPE_NAME = 'savedMessagesTopic';

    public function __construct(
        /**
         * Unique topic identifier.
         */
        protected int                    $id,
        /**
         * Type of the topic.
         */
        protected SavedMessagesTopicType $type,
        /**
         * True, if the topic is pinned.
         */
        protected bool                   $isPinned,
        /**
         * A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order.
         */
        protected int                    $order,
        /**
         * Last message in the topic; may be null if none or unknown.
         */
        protected ?Message               $lastMessage,
        /**
         * A draft of a message in the topic; may be null if none.
         */
        protected ?DraftMessage          $draftMessage,
    ) {}

    public static function fromArray(array $array): SavedMessagesTopic
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['is_pinned'],
            $array['order'],
            isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null,
            isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null,
        );
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getLastMessage(): ?Message
    {
        return $this->lastMessage;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getType(): SavedMessagesTopicType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'id'            => $this->id,
            'type'          => $this->type->typeSerialize(),
            'is_pinned'     => $this->isPinned,
            'order'         => $this->order,
            'last_message'  => $this->lastMessage ?? null,
            'draft_message' => $this->draftMessage ?? null,
        ];
    }
}
