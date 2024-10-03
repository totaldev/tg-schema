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
    public const TYPE_NAME = 'updateDeleteMessages';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int   $chatId,
        /**
         * Identifiers of the deleted messages.
         *
         * @var int[]
         */
        protected array $messageIds,
        /**
         * True, if the messages are permanently deleted by a user (as opposed to just becoming inaccessible).
         */
        protected bool  $isPermanent,
        /**
         * True, if the messages are deleted only from the cache and can possibly be retrieved again in the future.
         */
        protected bool  $fromCache,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateDeleteMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_ids'],
            $array['is_permanent'],
            $array['from_cache'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_ids'  => $this->messageIds,
            'is_permanent' => $this->isPermanent,
            'from_cache'   => $this->fromCache,
        ];
    }
}
