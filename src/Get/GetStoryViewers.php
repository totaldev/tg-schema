<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns viewers of a story. The method can be called only for stories posted on behalf of the current user
 */
class GetStoryViewers extends TdFunction
{
    public const TYPE_NAME = 'getStoryViewers';

    /**
     * The maximum number of story viewers to return
     *
     * @var int
     */
    protected int $limit;

    /**
     * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     *
     * @var string
     */
    protected string $offset;

    /**
     * Pass true to get only contacts; pass false to get all relevant viewers
     *
     * @var bool
     */
    protected bool $onlyContacts;

    /**
     * Pass true to get viewers with reaction first; pass false to get viewers sorted just by view_date
     *
     * @var bool
     */
    protected bool $preferWithReaction;

    /**
     * Query to search for in names and usernames of the viewers; may be empty to get all relevant viewers
     *
     * @var string
     */
    protected string $query;

    /**
     * Story identifier
     *
     * @var int
     */
    protected int $storyId;

    public function __construct(
        int    $storyId,
        string $query,
        bool   $onlyContacts,
        bool   $preferWithReaction,
        string $offset,
        int    $limit,
    )
    {
        $this->storyId = $storyId;
        $this->query = $query;
        $this->onlyContacts = $onlyContacts;
        $this->preferWithReaction = $preferWithReaction;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetStoryViewers
    {
        return new static(
            $array['story_id'],
            $array['query'],
            $array['only_contacts'],
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
            '@type' => static::TYPE_NAME,
            'story_id' => $this->storyId,
            'query' => $this->query,
            'only_contacts' => $this->onlyContacts,
            'prefer_with_reaction' => $this->preferWithReaction,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }
}
