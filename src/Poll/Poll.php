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
    public const string TYPE_NAME = 'poll';

    public function __construct(
        /**
         * True, if multiple answer options can be chosen simultaneously.
         */
        protected bool          $allowsMultipleAnswers,
        /**
         * True, if the poll can be answered multiple times.
         */
        protected bool          $allowsRevoting,
        /**
         * True, if the current user can get voters in the poll.
         */
        protected bool          $canGetVoters,
        /**
         * Point in time (Unix timestamp) when the poll will automatically be closed.
         */
        protected int           $closeDate,
        /**
         * Unique poll identifier.
         */
        protected int           $id,
        /**
         * True, if the poll is anonymous.
         */
        protected bool          $isAnonymous,
        /**
         * True, if the poll is closed.
         */
        protected bool          $isClosed,
        /**
         * Amount of time the poll will be active after creation, in seconds.
         */
        protected int           $openPeriod,
        /**
         * The list of 0-based poll identifiers in which the options of the poll must be shown; empty if the order of options must not be changed.
         *
         * @var int[]
         */
        protected array         $optionOrder,
        /**
         * List of poll answer options.
         *
         * @var PollOption[]
         */
        protected array         $options,
        /**
         * Poll question; 1-300 characters; may contain only custom emoji entities.
         */
        protected FormattedText $question,
        /**
         * Identifiers of recent voters, if the poll is non-anonymous and poll results are available.
         *
         * @var MessageSender[]
         */
        protected array         $recentVoterIds,
        /**
         * Total number of voters, participating in the poll.
         */
        protected int           $totalVoterCount,
        /**
         * Type of the poll.
         */
        protected PollType      $type,
    ) {}

    public static function fromArray(array $array): Poll
    {
        return new static(
            allowsMultipleAnswers: $array['allows_multiple_answers'],
            allowsRevoting       : $array['allows_revoting'],
            canGetVoters         : $array['can_get_voters'],
            closeDate            : $array['close_date'],
            id                   : $array['id'],
            isAnonymous          : $array['is_anonymous'],
            isClosed             : $array['is_closed'],
            openPeriod           : $array['open_period'],
            optionOrder          : $array['option_order'],
            options              : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
            question             : TdSchemaRegistry::fromArray($array['question']),
            recentVoterIds       : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_voter_ids']),
            totalVoterCount      : $array['total_voter_count'],
            type                 : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getAllowsMultipleAnswers(): bool
    {
        return $this->allowsMultipleAnswers;
    }

    public function getAllowsRevoting(): bool
    {
        return $this->allowsRevoting;
    }

    public function getCanGetVoters(): bool
    {
        return $this->canGetVoters;
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

    public function getOptionOrder(): array
    {
        return $this->optionOrder;
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

    public function setAllowsMultipleAnswers(bool $value): static
    {
        $this->allowsMultipleAnswers = $value;

        return $this;
    }

    public function setAllowsRevoting(bool $value): static
    {
        $this->allowsRevoting = $value;

        return $this;
    }

    public function setCanGetVoters(bool $value): static
    {
        $this->canGetVoters = $value;

        return $this;
    }

    public function setCloseDate(int $value): static
    {
        $this->closeDate = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsAnonymous(bool $value): static
    {
        $this->isAnonymous = $value;

        return $this;
    }

    public function setIsClosed(bool $value): static
    {
        $this->isClosed = $value;

        return $this;
    }

    public function setOpenPeriod(int $value): static
    {
        $this->openPeriod = $value;

        return $this;
    }

    public function setOptionOrder(array $value): static
    {
        $this->optionOrder = $value;

        return $this;
    }

    public function setOptions(array $value): static
    {
        $this->options = $value;

        return $this;
    }

    public function setQuestion(FormattedText $value): static
    {
        $this->question = $value;

        return $this;
    }

    public function setRecentVoterIds(array $value): static
    {
        $this->recentVoterIds = $value;

        return $this;
    }

    public function setTotalVoterCount(int $value): static
    {
        $this->totalVoterCount = $value;

        return $this;
    }

    public function setType(PollType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'allows_multiple_answers' => $this->allowsMultipleAnswers,
            'allows_revoting'         => $this->allowsRevoting,
            'can_get_voters'          => $this->canGetVoters,
            'close_date'              => $this->closeDate,
            'id'                      => $this->id,
            'is_anonymous'            => $this->isAnonymous,
            'is_closed'               => $this->isClosed,
            'open_period'             => $this->openPeriod,
            'option_order'            => $this->optionOrder,
            'options'                 => array_map(static fn($x) => $x->jsonSerialize(), $this->options),
            'question'                => $this->question->jsonSerialize(),
            'recent_voter_ids'        => array_map(static fn($x) => $x->jsonSerialize(), $this->recentVoterIds),
            'total_voter_count'       => $this->totalVoterCount,
            'type'                    => $this->type->jsonSerialize(),
        ];
    }
}
