<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatJoinRequestsInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat pending join requests were changed.
 */
class UpdateChatPendingJoinRequests extends Update
{
    public const TYPE_NAME = 'updateChatPendingJoinRequests';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                   $chatId,
        /**
         * The new data about pending join requests; may be null.
         */
        protected ?ChatJoinRequestsInfo $pendingJoinRequests
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatPendingJoinRequests
    {
        return new static(
            $array['chat_id'],
            isset($array['pending_join_requests']) ? TdSchemaRegistry::fromArray($array['pending_join_requests']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPendingJoinRequests(): ?ChatJoinRequestsInfo
    {
        return $this->pendingJoinRequests;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'pending_join_requests' => (isset($this->pendingJoinRequests) ? $this->pendingJoinRequests : null),
        ];
    }
}
