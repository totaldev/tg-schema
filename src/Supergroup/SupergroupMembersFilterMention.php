<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns users which can be mentioned in the supergroup
 */
class SupergroupMembersFilterMention extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterMention';

    /**
     * If non-zero, the identifier of the current message thread
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    public function __construct(string $query, int $messageThreadId)
    {
        parent::__construct();

        $this->query = $query;
        $this->messageThreadId = $messageThreadId;
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
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
            'message_thread_id' => $this->messageThreadId,
        ];
    }
}
