<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Poll\PollType;
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
         * Point in time (Unix timestamp) when the poll will automatically be closed; for bots only.
         */
        protected int           $closeDate,
        /**
         * True, if the poll voters are anonymous. Non-anonymous polls can't be sent or forwarded to channels.
         */
        protected bool          $isAnonymous,
        /**
         * True, if the poll needs to be sent already closed; for bots only.
         */
        protected bool          $isClosed,
        /**
         * Amount of time the poll will be active after creation, in seconds; for bots only.
         */
        protected int           $openPeriod,
        /**
         * List of poll answer options, 2-getOption("poll_answer_count_max") strings 1-100 characters each. Only custom emoji entities are allowed to be added and only by Premium users.
         *
         * @var FormattedText[]
         */
        protected array         $options,
        /**
         * Poll question; 1-255 characters (up to 300 characters for bots). Only custom emoji entities are allowed to be added and only by Premium users.
         */
        protected FormattedText $question,
        /**
         * Type of the poll.
         */
        protected PollType      $type,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessagePoll
    {
        return new static(
            closeDate  : $array['close_date'],
            isAnonymous: $array['is_anonymous'],
            isClosed   : $array['is_closed'],
            openPeriod : $array['open_period'],
            options    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
            question   : TdSchemaRegistry::fromArray($array['question']),
            type       : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getCloseDate(): int
    {
        return $this->closeDate;
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

    public function getType(): PollType
    {
        return $this->type;
    }

    public function setCloseDate(int $value): static
    {
        $this->closeDate = $value;

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

    public function setType(PollType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'close_date'   => $this->closeDate,
            'is_anonymous' => $this->isAnonymous,
            'is_closed'    => $this->isClosed,
            'open_period'  => $this->openPeriod,
            'options'      => array_map(static fn($x) => $x->jsonSerialize(), $this->options),
            'question'     => $this->question->jsonSerialize(),
            'type'         => $this->type->jsonSerialize(),
        ];
    }
}
