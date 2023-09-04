<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns viewers of a story. The method can be called if story.can_get_viewers == true
 */
class GetStoryViewers extends TdFunction
{
    public const TYPE_NAME = 'getStoryViewers';

    /**
     * Story identifier
     *
     * @var int
     */
    protected int $storyId;

    /**
     * Query to search for in names and usernames of the viewers; may be empty to get all relevant viewers
     *
     * @var string
     */
    protected string $query;

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
     * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     *
     * @var string
     */
    protected string $offset;

    /**
     * The maximum number of story viewers to return
     *
     * @var int
     */
    protected int $limit;

    public function __construct(
        int $storyId,
        string $query,
        bool $onlyContacts,
        bool $preferWithReaction,
        string $offset,
        int $limit,
    ) {
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

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getOnlyContacts(): bool
    {
        return $this->onlyContacts;
    }

    public function getPreferWithReaction(): bool
    {
        return $this->preferWithReaction;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
