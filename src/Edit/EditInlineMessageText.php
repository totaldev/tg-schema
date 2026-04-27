<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the text of an inline text or game message sent via a bot; for bots only.
 */
class EditInlineMessageText extends TdFunction
{
    public const string TYPE_NAME = 'editInlineMessageText';

    public function __construct(
        /**
         * Inline message identifier.
         */
        protected string              $inlineMessageId,
        /**
         * New text content of the message. Must be of type inputMessageText.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): EditInlineMessageText
    {
        return new static(
            inlineMessageId    : $array['inline_message_id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
        );
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function setInlineMessageId(string $value): static
    {
        $this->inlineMessageId = $value;

        return $this;
    }

    public function setInputMessageContent(InputMessageContent $value): static
    {
        $this->inputMessageContent = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'inline_message_id'     => $this->inlineMessageId,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
        ];
    }
}
