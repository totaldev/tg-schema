<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a message to be replied that is from a different chat or a forum topic; not supported in secret chats.
 */
class InputMessageReplyToExternalMessage extends InputMessageReplyTo
{
    public const string TYPE_NAME = 'inputMessageReplyToExternalMessage';

    public function __construct(
        /**
         * The identifier of the chat to which the message to be replied belongs.
         */
        protected int             $chatId,
        /**
         * Identifier of the checklist task in the message to be replied; pass 0 to reply to the whole message.
         */
        protected int             $checklistTaskId,
        /**
         * The identifier of the message to be replied in the specified chat. A message can be replied in another chat or forum topic only if messageProperties.can_be_replied_in_another_chat.
         */
        protected int             $messageId,
        /**
         * Quote from the message to be replied; pass null if none.
         */
        protected ?InputTextQuote $quote = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageReplyToExternalMessage
    {
        return new static(
            chatId         : $array['chat_id'],
            checklistTaskId: $array['checklist_task_id'],
            messageId      : $array['message_id'],
            quote          : (isset($array['quote']) ? TdSchemaRegistry::fromArray($array['quote']) : null),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getChecklistTaskId(): int
    {
        return $this->checklistTaskId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getQuote(): ?InputTextQuote
    {
        return $this->quote;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setChecklistTaskId(int $value): static
    {
        $this->checklistTaskId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setQuote(?InputTextQuote $value): static
    {
        $this->quote = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'checklist_task_id' => $this->checklistTaskId,
            'message_id'        => $this->messageId,
            'quote'             => (null !== $this->quote ? $this->quote->jsonSerialize() : null),
        ];
    }
}
