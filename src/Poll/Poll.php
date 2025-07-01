<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a poll.
 */
class Poll extends TdObject
{
    public const TYPE_NAME = 'poll';

    public function __construct(
        /**
         * Unique poll identifier.
         */
        protected int           $id,
        /**
         * Poll question; 1-300 characters. Only custom emoji entities are allowed.
         */
        protected FormattedText $question,
        /**
         * List of poll answer options.
         *
         * @var PollOption[]
         */
        protected array         $options,
        /**
         * Total number of voters, participating in the poll.
         */
        protected int           $totalVoterCount,
        /**
         * Identifiers of recent voters, if the poll is non-anonymous.
         *
         * @var MessageSender[]
         */
        protected array         $recentVoterIds,
        /**
         * True, if the poll is anonymous.
         */
        protected bool          $isAnonymous,
        /**
         * Type of the poll.
         */
        protected PollType      $type,
        /**
         * Amount of time the poll will be active after creation, in seconds.
         */
        protected int           $openPeriod,
        /**
         * Point in time (Unix timestamp) when the poll will automatically be closed.
         */
        protected int           $closeDate,
        /**
         * True, if the poll is closed.
         */
        protected bool          $isClosed,
    ) {}

    public static function fromArray(array $array): Poll
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['question']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
            $array['total_voter_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_voter_ids']),
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

    public function getQuestion(): FormattedText
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
            '@type'             => static::TYPE_NAME,
            'id'                => $this->id,
            'question'          => $this->question->typeSerialize(),
            'options'           => array_map(static fn($x) => $x->typeSerialize(), $this->options),
            'total_voter_count' => $this->totalVoterCount,
            'recent_voter_ids'  => array_map(static fn($x) => $x->typeSerialize(), $this->recentVoterIds),
            'is_anonymous'      => $this->isAnonymous,
            'type'              => $this->type->typeSerialize(),
            'open_period'       => $this->openPeriod,
            'close_date'        => $this->closeDate,
            'is_closed'         => $this->isClosed,
        ];
    }
}
