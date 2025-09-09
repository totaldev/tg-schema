<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes one answer option of a poll.
 */
class PollOption extends TdObject
{
    public const TYPE_NAME = 'pollOption';

    public function __construct(
        /**
         * Option text; 1-100 characters. Only custom emoji entities are allowed.
         */
        protected FormattedText $text,
        /**
         * Number of voters for this option, available only for closed or voted polls.
         */
        protected int           $voterCount,
        /**
         * The percentage of votes for this option; 0-100.
         */
        protected int           $votePercentage,
        /**
         * True, if the option was chosen by the user.
         */
        protected bool          $isChosen,
        /**
         * True, if the option is being chosen by a pending setPollAnswer request.
         */
        protected bool          $isBeingChosen,
    ) {}

    public static function fromArray(array $array): PollOption
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['voter_count'],
            $array['vote_percentage'],
            $array['is_chosen'],
            $array['is_being_chosen'],
        );
    }

    public function getIsBeingChosen(): bool
    {
        return $this->isBeingChosen;
    }

    public function getIsChosen(): bool
    {
        return $this->isChosen;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getVotePercentage(): int
    {
        return $this->votePercentage;
    }

    public function getVoterCount(): int
    {
        return $this->voterCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'text'            => $this->text->typeSerialize(),
            'voter_count'     => $this->voterCount,
            'vote_percentage' => $this->votePercentage,
            'is_chosen'       => $this->isChosen,
            'is_being_chosen' => $this->isBeingChosen,
        ];
    }
}
