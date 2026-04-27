<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with information about a deleted poll option.
 */
class MessagePollOptionDeleted extends MessageContent
{
    public const string TYPE_NAME = 'messagePollOptionDeleted';

    public function __construct(
        /**
         * Identifier of the deleted option in the poll.
         */
        protected string        $optionId,
        /**
         * Identifier of the message with the poll; can be an identifier of a deleted message or 0.
         */
        protected int           $pollMessageId,
        /**
         * Text of the option; 1-100 characters; may contain only custom emoji entities.
         */
        protected FormattedText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePollOptionDeleted
    {
        return new static(
            optionId     : $array['option_id'],
            pollMessageId: $array['poll_message_id'],
            text         : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function getPollMessageId(): int
    {
        return $this->pollMessageId;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setOptionId(string $value): static
    {
        $this->optionId = $value;

        return $this;
    }

    public function setPollMessageId(int $value): static
    {
        $this->pollMessageId = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'option_id'       => $this->optionId,
            'poll_message_id' => $this->pollMessageId,
            'text'            => $this->text->jsonSerialize(),
        ];
    }
}
