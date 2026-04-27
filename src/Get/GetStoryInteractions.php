<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns interactions with a story. The method can be called only for stories posted on behalf of the current user.
 */
class GetStoryInteractions extends TdFunction
{
    public const string TYPE_NAME = 'getStoryInteractions';

    public function __construct(
        /**
         * The maximum number of story interactions to return.
         */
        protected int    $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * Pass true to get only interactions by contacts; pass false to get all relevant interactions.
         */
        protected bool   $onlyContacts,
        /**
         * Pass true to get forwards and reposts first, then reactions, then other views; pass false to get interactions sorted just by interaction date.
         */
        protected bool   $preferForwards,
        /**
         * Pass true to get interactions with reaction first; pass false to get interactions sorted just by interaction date. Ignored if prefer_forwards == true.
         */
        protected bool   $preferWithReaction,
        /**
         * Query to search for in names, usernames and titles; may be empty to get all relevant interactions.
         */
        protected string $query,
        /**
         * Story identifier.
         */
        protected int    $storyId,
    ) {}

    public static function fromArray(array $array): GetStoryInteractions
    {
        return new static(
            limit             : $array['limit'],
            offset            : $array['offset'],
            onlyContacts      : $array['only_contacts'],
            preferForwards    : $array['prefer_forwards'],
            preferWithReaction: $array['prefer_with_reaction'],
            query             : $array['query'],
            storyId           : $array['story_id'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getOnlyContacts(): bool
    {
        return $this->onlyContacts;
    }

    public function getPreferForwards(): bool
    {
        return $this->preferForwards;
    }

    public function getPreferWithReaction(): bool
    {
        return $this->preferWithReaction;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setOnlyContacts(bool $value): static
    {
        $this->onlyContacts = $value;

        return $this;
    }

    public function setPreferForwards(bool $value): static
    {
        $this->preferForwards = $value;

        return $this;
    }

    public function setPreferWithReaction(bool $value): static
    {
        $this->preferWithReaction = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'limit'                => $this->limit,
            'offset'               => $this->offset,
            'only_contacts'        => $this->onlyContacts,
            'prefer_forwards'      => $this->preferForwards,
            'prefer_with_reaction' => $this->preferWithReaction,
            'query'                => $this->query,
            'story_id'             => $this->storyId,
        ];
    }
}
