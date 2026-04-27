<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Process;

use Totaldev\TgSchema\TdFunction;

/**
 * Handles a pending join request in a chat.
 */
class ProcessChatJoinRequest extends TdFunction
{
    public const string TYPE_NAME = 'processChatJoinRequest';

    public function __construct(
        /**
         * Pass true to approve the request; pass false to decline it.
         */
        protected bool $approve,
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Identifier of the user who sent the request.
         */
        protected int  $userId,
    ) {}

    public static function fromArray(array $array): ProcessChatJoinRequest
    {
        return new static(
            approve: $array['approve'],
            chatId : $array['chat_id'],
            userId : $array['user_id'],
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

    public function getUserId(): int
    {
        return $this->userId;
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

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'approve' => $this->approve,
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
        ];
    }
}
