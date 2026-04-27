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
    public const string TYPE_NAME = 'updateBusinessMessagesDeleted';

    public function __construct(
        /**
         * Identifier of a chat in the business account in which messages were deleted.
         */
        protected int    $chatId,
        /**
         * Unique identifier of the business connection.
         */
        protected string $connectionId,
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
            chatId      : $array['chat_id'],
            connectionId: $array['connection_id'],
            messageIds  : $array['message_ids'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setConnectionId(string $value): static
    {
        $this->connectionId = $value;

        return $this;
    }

    public function setMessageIds(array $value): static
    {
        $this->messageIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'connection_id' => $this->connectionId,
            'message_ids'   => $this->messageIds,
        ];
    }
}
