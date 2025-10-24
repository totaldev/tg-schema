<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a message to be replied in the same chat and forum topic.
 */
class InputMessageReplyToMessage extends InputMessageReplyTo
{
    public const string TYPE_NAME = 'inputMessageReplyToMessage';

    public function __construct(
        /**
         * The identifier of the message to be replied in the same chat and forum topic. A message can be replied in the same chat and forum topic only if messageProperties.can_be_replied.
         */
        protected int             $messageId,
        /**
         * Identifier of the checklist task in the message to be replied; pass 0 to reply to the whole message.
         */
        protected int             $checklistTaskId,
        /**
         * Quote from the message to be replied; pass null if none. Must always be null for replies in secret chats.
         */
        protected ?InputTextQuote $quote = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageReplyToMessage
    {
        return new static(
            $array['message_id'],
            isset($array['quote']) ? TdSchemaRegistry::fromArray($array['quote']) : null,
            $array['checklist_task_id'],
        );
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
            'message_id'        => $this->messageId,
            'quote'             => $this->quote ?? null,
            'checklist_task_id' => $this->checklistTaskId,
        ];
    }
}
