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
    public const TYPE_NAME = 'processChatJoinRequest';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Identifier of the user that sent the request.
         */
        protected int  $userId,
        /**
         * Pass true to approve the request; pass false to decline it.
         */
        protected bool $approve,
    ) {}

    public static function fromArray(array $array): ProcessChatJoinRequest
    {
        return new static(
            $array['chat_id'],
            $array['user_id'],
            $array['approve'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
            'approve' => $this->approve,
        ];
    }
}
