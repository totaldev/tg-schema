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
    public const TYPE_NAME = 'getStoryInteractions';

    public function __construct(
        /**
         * Story identifier.
         */
        protected int    $storyId,
        /**
         * Query to search for in names, usernames and titles; may be empty to get all relevant interactions.
         */
        protected string $query,
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
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of story interactions to return.
         */
        protected int    $limit,
    ) {}

    public static function fromArray(array $array): GetStoryInteractions
    {
        return new static(
            $array['story_id'],
            $array['query'],
            $array['only_contacts'],
            $array['prefer_forwards'],
            $array['prefer_with_reaction'],
            $array['offset'],
            $array['limit'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_id'             => $this->storyId,
            'query'                => $this->query,
            'only_contacts'        => $this->onlyContacts,
            'prefer_forwards'      => $this->preferForwards,
            'prefer_with_reaction' => $this->preferWithReaction,
            'offset'               => $this->offset,
            'limit'                => $this->limit,
        ];
    }
}
