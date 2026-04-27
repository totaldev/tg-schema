<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Saved;

/**
 * Topic containing messages forwarded from a specific chat.
 */
class SavedMessagesTopicTypeSavedFromChat extends SavedMessagesTopicType
{
    public const string TYPE_NAME = 'savedMessagesTopicTypeSavedFromChat';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SavedMessagesTopicTypeSavedFromChat
    {
        return new static(
            chatId: $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
