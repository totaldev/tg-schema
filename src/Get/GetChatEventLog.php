<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Chat\ChatEventLogFilters;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a list of service actions taken by chat members and administrators in the last 48 hours. Available only for supergroups and channels. Requires
 * administrator rights. Returns results in reverse chronological order (i.e., in order of decreasing event_id).
 */
class GetChatEventLog extends TdFunction
{
    public const string TYPE_NAME = 'getChatEventLog';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                  $chatId,
        /**
         * Identifier of an event from which to return results. Use 0 to get results from the latest events.
         */
        protected int                  $fromEventId,
        /**
         * The maximum number of events to return; up to 100.
         */
        protected int                  $limit,
        /**
         * Search query by which to filter events.
         */
        protected string               $query,
        /**
         * User identifiers by which to filter events. By default, events relating to all users will be returned.
         *
         * @var int[]
         */
        protected array                $userIds,
        /**
         * The types of events to return; pass null to get chat events of all types.
         */
        protected ?ChatEventLogFilters $filters = null,
    ) {}

    public static function fromArray(array $array): GetChatEventLog
    {
        return new static(
            chatId     : $array['chat_id'],
            filters    : (isset($array['filters']) ? TdSchemaRegistry::fromArray($array['filters']) : null),
            fromEventId: $array['from_event_id'],
            limit      : $array['limit'],
            query      : $array['query'],
            userIds    : $array['user_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFilters(): ?ChatEventLogFilters
    {
        return $this->filters;
    }

    public function getFromEventId(): int
    {
        return $this->fromEventId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setFilters(?ChatEventLogFilters $value): static
    {
        $this->filters = $value;

        return $this;
    }

    public function setFromEventId(int $value): static
    {
        $this->fromEventId = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function setUserIds(array $value): static
    {
        $this->userIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'filters'       => (null !== $this->filters ? $this->filters->jsonSerialize() : null),
            'from_event_id' => $this->fromEventId,
            'limit'         => $this->limit,
            'query'         => $this->query,
            'user_ids'      => $this->userIds,
        ];
    }
}
