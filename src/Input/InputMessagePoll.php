<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Poll\PollType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a poll. Polls can't be sent to secret chats. Polls can be sent only to a private chat with a bot.
 */
class InputMessagePoll extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessagePoll';

    public function __construct(
        /**
         * Poll question; 1-255 characters (up to 300 characters for bots). Only custom emoji entities are allowed to be added and only by Premium users.
         */
        protected FormattedText $question,
        /**
         * List of poll answer options, 2-10 strings 1-100 characters each. Only custom emoji entities are allowed to be added and only by Premium users.
         *
         * @var FormattedText[]
         */
        protected array         $options,
        /**
         * True, if the poll voters are anonymous. Non-anonymous polls can't be sent or forwarded to channels.
         */
        protected bool          $isAnonymous,
        /**
         * Type of the poll.
         */
        protected PollType      $type,
        /**
         * Amount of time the poll will be active after creation, in seconds; for bots only.
         */
        protected int           $openPeriod,
        /**
         * Point in time (Unix timestamp) when the poll will automatically be closed; for bots only.
         */
        protected int           $closeDate,
        /**
         * True, if the poll needs to be sent already closed; for bots only.
         */
        protected bool          $isClosed,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessagePoll
    {
        return new static(
            TdSchemaRegistry::fromArray($array['question']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'question'     => $this->question->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->options),
            'is_anonymous' => $this->isAnonymous,
            'type'         => $this->type->typeSerialize(),
            'open_period'  => $this->openPeriod,
            'close_date'   => $this->closeDate,
            'is_closed'    => $this->isClosed,
        ];
    }
}
