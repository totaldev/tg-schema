<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a list of common group chats with a given user. Chats are sorted by their type and creation date.
 */
class GetGroupsInCommon extends TdFunction
{
    public const string TYPE_NAME = 'getGroupsInCommon';

    public function __construct(
        /**
         * The maximum number of chats to be returned; up to 100.
         */
        protected int $limit,
        /**
         * Chat identifier starting from which to return chats; use 0 for the first request.
         */
        protected int $offsetChatId,
        /**
         * User identifier.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): GetGroupsInCommon
    {
        return new static(
            limit       : $array['limit'],
            offsetChatId: $array['offset_chat_id'],
            userId      : $array['user_id'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffsetChatId(): int
    {
        return $this->offsetChatId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffsetChatId(int $value): static
    {
        $this->offsetChatId = $value;

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
            '@type'          => static::TYPE_NAME,
            'limit'          => $this->limit,
            'offset_chat_id' => $this->offsetChatId,
            'user_id'        => $this->userId,
        ];
    }
}
