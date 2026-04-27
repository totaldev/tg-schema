<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports a chat to the Telegram moderators. A chat can be reported only from the chat action bar, or if chat.can_be_reported.
 */
class ReportChat extends TdFunction
{
    public const string TYPE_NAME = 'reportChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Identifiers of reported messages. Use messageProperties.can_report_chat to check whether the message can be reported.
         *
         * @var int[]
         */
        protected array  $messageIds,
        /**
         * Option identifier chosen by the user; leave empty for the initial request.
         */
        protected string $optionId,
        /**
         * Additional report details if asked by the server; 0-1024 characters; leave empty for the initial request.
         */
        protected string $text,
    ) {}

    public static function fromArray(array $array): ReportChat
    {
        return new static(
            chatId    : $array['chat_id'],
            messageIds: $array['message_ids'],
            optionId  : $array['option_id'],
            text      : $array['text'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageIds(array $value): static
    {
        $this->messageIds = $value;

        return $this;
    }

    public function setOptionId(string $value): static
    {
        $this->optionId = $value;

        return $this;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'message_ids' => $this->messageIds,
            'option_id'   => $this->optionId,
            'text'        => $this->text,
        ];
    }
}
