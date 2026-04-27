<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The linked chat of a supergroup was changed.
 */
class ChatEventLinkedChatChanged extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventLinkedChatChanged';

    public function __construct(
        /**
         * New supergroup linked chat identifier.
         */
        protected int $newLinkedChatId,
        /**
         * Previous supergroup linked chat identifier.
         */
        protected int $oldLinkedChatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventLinkedChatChanged
    {
        return new static(
            newLinkedChatId: $array['new_linked_chat_id'],
            oldLinkedChatId: $array['old_linked_chat_id'],
        );
    }

    public function getNewLinkedChatId(): int
    {
        return $this->newLinkedChatId;
    }

    public function getOldLinkedChatId(): int
    {
        return $this->oldLinkedChatId;
    }

    public function setNewLinkedChatId(int $value): static
    {
        $this->newLinkedChatId = $value;

        return $this;
    }

    public function setOldLinkedChatId(int $value): static
    {
        $this->oldLinkedChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'new_linked_chat_id' => $this->newLinkedChatId,
            'old_linked_chat_id' => $this->oldLinkedChatId,
        ];
    }
}
