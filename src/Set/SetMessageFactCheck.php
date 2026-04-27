<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the fact-check of a message. Can be only used if messageProperties.can_set_fact_check == true.
 */
class SetMessageFactCheck extends TdFunction
{
    public const string TYPE_NAME = 'setMessageFactCheck';

    public function __construct(
        /**
         * The channel chat the message belongs to.
         */
        protected int            $chatId,
        /**
         * Identifier of the message.
         */
        protected int            $messageId,
        /**
         * New text of the fact-check; 0-getOption("fact_check_length_max") characters; pass null to remove it. Only Bold, Italic, and TextUrl entities with https://t.me/ links are supported.
         */
        protected ?FormattedText $text = null,
    ) {}

    public static function fromArray(array $array): SetMessageFactCheck
    {
        return new static(
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
            text     : (isset($array['text']) ? TdSchemaRegistry::fromArray($array['text']) : null),
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

    public function getText(): ?FormattedText
    {
        return $this->text;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setText(?FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'text'       => (null !== $this->text ? $this->text->jsonSerialize() : null),
        ];
    }
}
