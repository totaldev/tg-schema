<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a poll
 */
class Poll extends TdObject
{
    public const TYPE_NAME = 'poll';

    /**
     * Point in time (Unix timestamp) when the poll will automatically be closed
     *
     * @var int
     */
    protected int $closeDate;

    /**
     * Unique poll identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * True, if the poll is anonymous
     *
     * @var bool
     */
    protected bool $isAnonymous;

    /**
     * True, if the poll is closed
     *
     * @var bool
     */
    protected bool $isClosed;

    /**
     * Amount of time the poll will be active after creation, in seconds
     *
     * @var int
     */
    protected int $openPeriod;

    /**
     * List of poll answer options
     *
     * @var PollOption[]
     */
    protected array $options;

    /**
     * Poll question; 1-300 characters
     *
     * @var string
     */
    protected string $question;

    /**
     * Identifiers of recent voters, if the poll is non-anonymous
     *
     * @var MessageSender[]
     */
    protected array $recentVoterIds;

    /**
     * Total number of voters, participating in the poll
     *
     * @var int
     */
    protected int $totalVoterCount;

    /**
     * Type of the poll
     *
     * @var PollType
     */
    protected PollType $type;

    public function __construct(
        int      $id,
        string   $question,
        array    $options,
        int      $totalVoterCount,
        array    $recentVoterIds,
        bool     $isAnonymous,
        PollType $type,
        int      $openPeriod,
        int      $closeDate,
        bool     $isClosed,
    )
    {
        $this->id = $id;
        $this->question = $question;
        $this->options = $options;
        $this->totalVoterCount = $totalVoterCount;
        $this->recentVoterIds = $recentVoterIds;
        $this->isAnonymous = $isAnonymous;
        $this->type = $type;
        $this->openPeriod = $openPeriod;
        $this->closeDate = $closeDate;
        $this->isClosed = $isClosed;
    }

    public static function fromArray(array $array): Poll
    {
        return new static(
            $array['id'],
            $array['question'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
            $array['total_voter_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_voterIds']),
            $array['is_anonymous'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['open_period'],
            $array['close_date'],
            $array['is_closed'],
        );
    }

    public function getCloseDate(): int
    {
        return $this->closeDate;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    public function getOpenPeriod(): int
    {
        return $this->openPeriod;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getRecentVoterIds(): array
    {
        return $this->recentVoterIds;
    }

    public function getTotalVoterCount(): int
    {
        return $this->totalVoterCount;
    }

    public function getType(): PollType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'question' => $this->question,
            array_map(fn($x) => $x->typeSerialize(), $this->options),
            'total_voter_count' => $this->totalVoterCount,
            array_map(fn($x) => $x->typeSerialize(), $this->recentVoterIds),
            'is_anonymous' => $this->isAnonymous,
            'type' => $this->type->typeSerialize(),
            'open_period' => $this->openPeriod,
            'close_date' => $this->closeDate,
            'is_closed' => $this->isClosed,
        ];
    }
}
