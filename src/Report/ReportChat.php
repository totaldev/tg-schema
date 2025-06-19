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
    public const TYPE_NAME = 'reportChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Option identifier chosen by the user; leave empty for the initial request.
         */
        protected string $optionId,
        /**
         * Identifiers of reported messages. Use messageProperties.can_report_chat to check whether the message can be reported.
         *
         * @var int[]
         */
        protected array  $messageIds,
        /**
         * Additional report details if asked by the server; 0-1024 characters; leave empty for the initial request.
         */
        protected string $text
    ) {}

    public static function fromArray(array $array): ReportChat
    {
        return new static(
            $array['chat_id'],
            $array['option_id'],
            $array['message_ids'],
            $array['text'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'option_id'   => $this->optionId,
            'message_ids' => $this->messageIds,
            'text'        => $this->text,
        ];
    }
}
