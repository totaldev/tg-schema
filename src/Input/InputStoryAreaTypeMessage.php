<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * An area pointing to a message.
 */
class InputStoryAreaTypeMessage extends InputStoryAreaType
{
    public const TYPE_NAME = 'inputStoryAreaTypeMessage';

    public function __construct(
        /**
         * Identifier of the chat with the message. Currently, the chat must be a supergroup or a channel chat.
         */
        protected int $chatId,
        /**
         * Identifier of the message. Use messageProperties.can_be_shared_in_story to check whether the message is suitable.
         */
        protected int $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryAreaTypeMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
