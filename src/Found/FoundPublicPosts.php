<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\Public\PublicPostSearchLimits;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of messages found by a public post search.
 */
class FoundPublicPosts extends TdObject
{
    public const string TYPE_NAME = 'foundPublicPosts';

    public function __construct(
        /**
         * True, if the query has failed because search limits are exceeded. In this case search_limits.daily_free_query_count will be equal to 0.
         */
        protected bool                    $areLimitsExceeded,
        /**
         * List of found public posts.
         *
         * @var Message[]
         */
        protected array                   $messages,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string                  $nextOffset,
        /**
         * Updated public post search limits after the query; repeated requests with the same query will be free; may be null if they didn't change.
         */
        protected ?PublicPostSearchLimits $searchLimits,
    ) {}

    public static function fromArray(array $array): FoundPublicPosts
    {
        return new static(
            areLimitsExceeded: $array['are_limits_exceeded'],
            messages         : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            nextOffset       : $array['next_offset'],
            searchLimits     : (isset($array['search_limits']) ? TdSchemaRegistry::fromArray($array['search_limits']) : null),
        );
    }

    public function getAreLimitsExceeded(): bool
    {
        return $this->areLimitsExceeded;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getSearchLimits(): ?PublicPostSearchLimits
    {
        return $this->searchLimits;
    }

    public function setAreLimitsExceeded(bool $value): static
    {
        $this->areLimitsExceeded = $value;

        return $this;
    }

    public function setMessages(array $value): static
    {
        $this->messages = $value;

        return $this;
    }

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setSearchLimits(?PublicPostSearchLimits $value): static
    {
        $this->searchLimits = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'are_limits_exceeded' => $this->areLimitsExceeded,
            'messages'            => array_map(static fn($x) => $x->jsonSerialize(), $this->messages),
            'next_offset'         => $this->nextOffset,
            'search_limits'       => (null !== $this->searchLimits ? $this->searchLimits->jsonSerialize() : null),
        ];
    }
}
