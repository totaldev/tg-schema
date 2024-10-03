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
    public const TYPE_NAME = 'chatEventLinkedChatChanged';

    public function __construct(
        /**
         * Previous supergroup linked chat identifier.
         */
        protected int $oldLinkedChatId,
        /**
         * New supergroup linked chat identifier.
         */
        protected int $newLinkedChatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventLinkedChatChanged
    {
        return new static(
            $array['old_linked_chat_id'],
            $array['new_linked_chat_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'old_linked_chat_id' => $this->oldLinkedChatId,
            'new_linked_chat_id' => $this->newLinkedChatId,
        ];
    }
}
