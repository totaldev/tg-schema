<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Edits the text of a message (or a text of a game message). Returns the edited message after the edit is completed on the server side.
 */
class EditMessageText extends TdFunction
{
    public const TYPE_NAME = 'editMessageText';

    /**
     * The chat the message belongs to.
     */
    protected int $chatId;

    /**
     * Identifier of the message.
     */
    protected int $messageId;

    /**
     * The new message reply markup; for bots only.
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * New text content of the message. Should be of type InputMessageText.
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(int $chatId, int $messageId, ReplyMarkup $replyMarkup, InputMessageContent $inputMessageContent)
    {
        $this->chatId              = $chatId;
        $this->messageId           = $messageId;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): EditMessageText
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'message_id'            => $this->messageId,
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
