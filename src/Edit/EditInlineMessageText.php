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
 * Edits the text of an inline text or game message sent via a bot; for bots only
 */
class EditInlineMessageText extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageText';

    /**
     * Inline message identifier
     *
     * @var string
     */
    protected string $inlineMessageId;

    /**
     * New text content of the message. Must be of type inputMessageText
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    /**
     * The new message reply markup; pass null if none
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    public function __construct(
        string              $inlineMessageId,
        ReplyMarkup         $replyMarkup,
        InputMessageContent $inputMessageContent,
    )
    {
        $this->inlineMessageId = $inlineMessageId;
        $this->replyMarkup = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): EditInlineMessageText
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
