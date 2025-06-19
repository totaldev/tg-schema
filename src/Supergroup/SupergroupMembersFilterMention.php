<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

/**
 * Returns users which can be mentioned in the supergroup.
 */
class SupergroupMembersFilterMention extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterMention';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string $query,
        /**
         * If non-zero, the identifier of the current message thread.
         */
        protected int    $messageThreadId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SupergroupMembersFilterMention
    {
        return new static(
            $array['query'],
            $array['message_thread_id'],
        );
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'query'             => $this->query,
            'message_thread_id' => $this->messageThreadId,
        ];
    }
}
