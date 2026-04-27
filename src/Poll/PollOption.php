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
    public const string TYPE_NAME = 'pollOption';

    public function __construct(
        /**
         * True, if the option is being chosen by a pending setPollAnswer request.
         */
        protected bool          $isBeingChosen,
        /**
         * True, if the option was chosen by the user.
         */
        protected bool          $isChosen,
        /**
         * Option text; 1-100 characters. Only custom emoji entities are allowed.
         */
        protected FormattedText $text,
        /**
         * The percentage of votes for this option; 0-100.
         */
        protected int           $votePercentage,
        /**
         * Number of voters for this option, available only for closed or voted polls.
         */
        protected int           $voterCount,
    ) {}

    public static function fromArray(array $array): PollOption
    {
        return new static(
            isBeingChosen : $array['is_being_chosen'],
            isChosen      : $array['is_chosen'],
            text          : TdSchemaRegistry::fromArray($array['text']),
            votePercentage: $array['vote_percentage'],
            voterCount    : $array['voter_count'],
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

    public function setIsBeingChosen(bool $value): static
    {
        $this->isBeingChosen = $value;

        return $this;
    }

    public function setIsChosen(bool $value): static
    {
        $this->isChosen = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setVotePercentage(int $value): static
    {
        $this->votePercentage = $value;

        return $this;
    }

    public function setVoterCount(int $value): static
    {
        $this->voterCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'is_being_chosen' => $this->isBeingChosen,
            'is_chosen'       => $this->isChosen,
            'text'            => $this->text->jsonSerialize(),
            'vote_percentage' => $this->votePercentage,
            'voter_count'     => $this->voterCount,
        ];
    }
}
