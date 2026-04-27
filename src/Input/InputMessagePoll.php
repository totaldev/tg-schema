<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a poll. Polls can't be sent to secret chats and channel direct messages chats. Polls can be sent to a private chat only if the chat is a chat
 * with a bot or the Saved Messages chat.
 */
class InputMessagePoll extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessagePoll';

    public function __construct(
        /**
         * True, if multiple answer options can be chosen simultaneously.
         */
        protected bool           $allowsMultipleAnswers,
        /**
         * True, if the poll can be answered multiple times.
         */
        protected bool           $allowsRevoting,
        /**
         * Point in time (Unix timestamp) when the poll will automatically be closed; must be 0-getOption("poll_open_period_max") seconds in the future; pass 0 if not specified.
         */
        protected int            $closeDate,
        /**
         * True, if the poll results will appear only after the poll closes.
         */
        protected bool           $hideResultsUntilCloses,
        /**
         * True, if the poll voters are anonymous. Non-anonymous polls can't be sent or forwarded to channels.
         */
        protected bool           $isAnonymous,
        /**
         * True, if the poll needs to be sent already closed; for bots only.
         */
        protected bool           $isClosed,
        /**
         * Amount of time the poll will be active after creation, in seconds; 0-getOption("poll_open_period_max"); pass 0 if not specified.
         */
        protected int            $openPeriod,
        /**
         * List of poll answer options; 2-getOption("poll_answer_count_max") options.
         *
         * @var InputPollOption[]
         */
        protected array          $options,
        /**
         * Poll question; 1-255 characters (up to 300 characters for bots). Only custom emoji entities are allowed to be added and only by Premium users.
         */
        protected FormattedText  $question,
        /**
         * True, if poll options must be shown in a fixed random order.
         */
        protected bool           $shuffleOptions,
        /**
         * Type of the poll.
         */
        protected InputPollType  $type,
        /**
         * Poll description; pass null to use an empty description; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText $description = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessagePoll
    {
        return new static(
            allowsMultipleAnswers : $array['allows_multiple_answers'],
            allowsRevoting        : $array['allows_revoting'],
            closeDate             : $array['close_date'],
            description           : (isset($array['description']) ? TdSchemaRegistry::fromArray($array['description']) : null),
            hideResultsUntilCloses: $array['hide_results_until_closes'],
            isAnonymous           : $array['is_anonymous'],
            isClosed              : $array['is_closed'],
            openPeriod            : $array['open_period'],
            options               : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
            question              : TdSchemaRegistry::fromArray($array['question']),
            shuffleOptions        : $array['shuffle_options'],
            type                  : TdSchemaRegistry::fromArray($array['type']),
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

    public function getCloseDate(): int
    {
        return $this->closeDate;
    }

    public function getDescription(): ?FormattedText
    {
        return $this->description;
    }

    public function getHideResultsUntilCloses(): bool
    {
        return $this->hideResultsUntilCloses;
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

    public function getShuffleOptions(): bool
    {
        return $this->shuffleOptions;
    }

    public function getType(): InputPollType
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

    public function setCloseDate(int $value): static
    {
        $this->closeDate = $value;

        return $this;
    }

    public function setDescription(?FormattedText $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setHideResultsUntilCloses(bool $value): static
    {
        $this->hideResultsUntilCloses = $value;

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

    public function setShuffleOptions(bool $value): static
    {
        $this->shuffleOptions = $value;

        return $this;
    }

    public function setType(InputPollType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'allows_multiple_answers'   => $this->allowsMultipleAnswers,
            'allows_revoting'           => $this->allowsRevoting,
            'close_date'                => $this->closeDate,
            'description'               => (null !== $this->description ? $this->description->jsonSerialize() : null),
            'hide_results_until_closes' => $this->hideResultsUntilCloses,
            'is_anonymous'              => $this->isAnonymous,
            'is_closed'                 => $this->isClosed,
            'open_period'               => $this->openPeriod,
            'options'                   => array_map(static fn($x) => $x->jsonSerialize(), $this->options),
            'question'                  => $this->question->jsonSerialize(),
            'shuffle_options'           => $this->shuffleOptions,
            'type'                      => $this->type->jsonSerialize(),
        ];
    }
}
