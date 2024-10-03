<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes messages.
 */
class DeleteMessages extends TdFunction
{
    public const TYPE_NAME = 'deleteMessages';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int   $chatId,
        /**
         * Identifiers of the messages to be deleted. Use messageProperties.can_be_deleted_only_for_self and messageProperties.can_be_deleted_for_all_users to get suitable messages.
         *
         * @var int[]
         */
        protected array $messageIds,
        /**
         * Pass true to delete messages for all chat members. Always true for supergroups, channels and secret chats.
         */
        protected bool  $revoke,
    ) {}

    public static function fromArray(array $array): DeleteMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_ids'],
            $array['revoke'],
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

    public function getRevoke(): bool
    {
        return $this->revoke;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'message_ids' => $this->messageIds,
            'revoke'      => $this->revoke,
        ];
    }
}
