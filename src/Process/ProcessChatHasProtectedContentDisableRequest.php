<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Process;

use Totaldev\TgSchema\TdFunction;

/**
 * Processes request to disable has_protected_content in a chat.
 */
class ProcessChatHasProtectedContentDisableRequest extends TdFunction
{
    public const string TYPE_NAME = 'processChatHasProtectedContentDisableRequest';

    public function __construct(
        /**
         * Pass true to approve the request; pass false to reject the request.
         */
        protected bool $approve,
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Identifier of the message with the request. The message must be incoming and has content of the type messageChatHasProtectedContentDisableRequested.
         */
        protected int  $requestMessageId,
    ) {}

    public static function fromArray(array $array): ProcessChatHasProtectedContentDisableRequest
    {
        return new static(
            approve         : $array['approve'],
            chatId          : $array['chat_id'],
            requestMessageId: $array['request_message_id'],
        );
    }

    public function getApprove(): bool
    {
        return $this->approve;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getRequestMessageId(): int
    {
        return $this->requestMessageId;
    }

    public function setApprove(bool $value): static
    {
        $this->approve = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setRequestMessageId(int $value): static
    {
        $this->requestMessageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'approve'            => $this->approve,
            'chat_id'            => $this->chatId,
            'request_message_id' => $this->requestMessageId,
        ];
    }
}
