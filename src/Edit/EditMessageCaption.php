<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the message content caption. Returns the edited message after the edit is completed on the server side
 */
class EditMessageCaption extends TdFunction
{
    public const TYPE_NAME = 'editMessageCaption';

    /**
     * New message content caption; 0-getOption("message_caption_length_max") characters; pass null to remove caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * The chat the message belongs to
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The new message reply markup; pass null if none; for bots only
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    public function __construct(int $chatId, int $messageId, ReplyMarkup $replyMarkup, FormattedText $caption)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->replyMarkup = $replyMarkup;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): EditMessageCaption
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
