<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Some messages were deleted.
 */
class UpdateDeleteMessages extends Update
{
    public const string TYPE_NAME = 'updateDeleteMessages';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int   $chatId,
        /**
         * True, if the messages are deleted only from the cache and can possibly be retrieved again in the future.
         */
        protected bool  $fromCache,
        /**
         * True, if the messages are permanently deleted by a user (as opposed to just becoming inaccessible).
         */
        protected bool  $isPermanent,
        /**
         * Identifiers of the deleted messages.
         *
         * @var int[]
         */
        protected array $messageIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateDeleteMessages
    {
        return new static(
            chatId     : $array['chat_id'],
            fromCache  : $array['from_cache'],
            isPermanent: $array['is_permanent'],
            messageIds : $array['message_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFromCache(): bool
    {
        return $this->fromCache;
    }

    public function getIsPermanent(): bool
    {
        return $this->isPermanent;
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

    public function setFromCache(bool $value): static
    {
        $this->fromCache = $value;

        return $this;
    }

    public function setIsPermanent(bool $value): static
    {
        $this->isPermanent = $value;

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
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'from_cache'   => $this->fromCache,
            'is_permanent' => $this->isPermanent,
            'message_ids'  => $this->messageIds,
        ];
    }
}
