<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Messages in a business account were deleted; for bots only.
 */
class UpdateBusinessMessagesDeleted extends Update
{
    public const TYPE_NAME = 'updateBusinessMessagesDeleted';

    public function __construct(
        /**
         * Unique identifier of the business connection.
         */
        protected string $connectionId,
        /**
         * Identifier of a chat in the business account in which messages were deleted.
         */
        protected int    $chatId,
        /**
         * Unique message identifiers of the deleted messages.
         *
         * @var int[]
         */
        protected array  $messageIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateBusinessMessagesDeleted
    {
        return new static(
            $array['connection_id'],
            $array['chat_id'],
            $array['message_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getConnectionId(): string
    {
        return $this->connectionId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'connection_id' => $this->connectionId,
            'chat_id'       => $this->chatId,
            'message_ids'   => $this->messageIds,
        ];
    }
}
