<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports a sponsored message to Telegram moderators.
 */
class ReportChatSponsoredMessage extends TdFunction
{
    public const TYPE_NAME = 'reportChatSponsoredMessage';

    public function __construct(
        /**
         * Chat identifier of the sponsored message.
         */
        protected int    $chatId,
        /**
         * Identifier of the sponsored message.
         */
        protected int    $messageId,
        /**
         * Option identifier chosen by the user; leave empty for the initial request.
         */
        protected string $optionId,
    ) {}

    public static function fromArray(array $array): ReportChatSponsoredMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['option_id'],
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

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'option_id'  => $this->optionId,
        ];
    }
}
